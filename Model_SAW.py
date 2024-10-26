import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import MinMaxScaler

class SawPredictor:
    def __init__(self, weights):
        self.weights = weights
        self.scaler = None

    def fit(self, data):
        # Menormalkan fitur menggunakan Min-Max scaling
        self.scaler = MinMaxScaler()
        normalized_data = self.scaler.fit_transform(data)
        self.normalized_data = normalized_data

    def predict_saw(self, data):
        if self.scaler is None:
            raise ValueError("The predictor must be fitted first. Call the fit method.")

        normalized_data = self.scaler.transform(data)
        scores = normalized_data.dot(self.weights)
        predictions = ['Gizi Baik' if score > 0.5 else 'Gizi Buruk' for score in scores]
        return predictions

# Load dataset
data = pd.read_excel("Status Gizi.xlsx")

# Drop fitur yang tidak relevan
data = data.drop(['Usia Saat Ukur', 'No', 'Prov', 'Nama', 'JK', 'Kab/Kota', 'BB Lahir', 'BB/U', 'ZS BB/U', 'TB/U', 'ZS TB/U', 'TB Lahir', 'ZS BB/TB', 'NIK', 'Tgl Lahir', 'Nama Ortu', 'Kec', 'Pukesmas', 'Desa/Kel', 'Posyandu', 'RT', 'RW', 'Alamat', 'Tanggal Pengukuran', 'Naik Berat Badan', 'PMT Diterima (kg)', 'Jml Vit A', 'KPSP', 'KIA'], axis=1)

# Assume that the columns 'feature1', 'feature2', ..., 'featureN' are the features
features = data.drop(['Status'], axis=1)
labels = data['Status']

# Split the dataset into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(features, labels, test_size=0.2, random_state=42)

# SAW Method for Prediction
weights = [0.20, 0.10, 0.70]  # Adjust weights based on feature importance

# Create an instance of SawPredictor
saw_predictor = SawPredictor(weights)

# Fit the predictor on the training data
saw_predictor.fit(X_train)

# Make predictions on the test set
test_predictions = saw_predictor.predict_saw(X_test)

# Evaluate the model
accuracy = sum(test_predictions == y_test) / len(y_test)
print(f'Accuracy: {accuracy * 100:.2f}%')
# Print the predictions
for i in range(len(X_test)):
    print(f"Prediction: {test_predictions[i]}, Actual: {y_test.iloc[i]}")

# save model  
import joblib
joblib.dump(saw_predictor, 'SAW.joblib')
print(type(saw_predictor))
print(dir(saw_predictor))
