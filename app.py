# app.py
from flask import Flask, render_template, request, redirect, url_for
import numpy as np
import joblib
from Model_SAW import SawPredictor

app = Flask(__name__, template_folder='templates', static_folder='assets')

# Load the SAW model and scaler from the joblib file
try:
    with open('SAW.joblib', 'rb') as model_file:
        loaded_model = joblib.load(model_file)

    print("Model SAW loaded successfully.")

except FileNotFoundError:
    print("File not found: SAW.joblib")
    loaded_model = None
except Exception as e:
    print("Error loading SAW model:", str(e))
    loaded_model = None

# Print information about the loaded model
print(type(loaded_model))
print(dir(loaded_model))

@app.route('/')
def home():
    return render_template('dss.php')

@app.route('/predict', methods=['GET', 'POST'])
def predict():
    if request.method == 'GET':
        return render_template('dss.php')
    elif request.method == 'POST':
        try:
            if loaded_model is not None:
                # Extract input features from the form
                tinggi = float(request.form['tinggi'])
                berat = float(request.form['berat'])
                lila = float(request.form['lila'])

                # Menggabungkan nilai-nilai ini ke dalam list atau array
                init_features = [tinggi, berat, lila]
                final_features = [np.array(init_features)]

                # Make predictions using the loaded model
                predictions = loaded_model.predict_saw(final_features)

                # Mengirim hasil prediksi ke dalam template HTML
                return render_template('status_gizi_page.php', prediction_text=predictions)
            else:
                return render_template('status_gizi_page.php', prediction_text='Error: Model not loaded.')
        except Exception as e:
            return render_template('status_gizi_page.php', prediction_text=f'Error: {str(e)}')
if __name__ == "__main__":
    app.run(debug=True)