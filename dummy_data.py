import pandas as pd
import numpy as np

# Set random seed for reproducibility
np.random.seed(42)

# Define the number of samples
n_samples = 800

# Create dummy data
data = {
    'durasi_live_menit': np.random.randint(30, 240, n_samples),
    'jumlah_penonton_puncak': np.random.randint(100, 5000, n_samples),
    'jumlah_produk_terjual': np.random.randint(1, 100, n_samples),
    'harga_rata_rata_produk': np.random.uniform(50000, 500000, n_samples),
    'jumlah_followers_saat_live': np.random.randint(1000, 100000, n_samples),
    'jumlah_likes_live': np.random.randint(1000, 50000, n_samples),
    'jumlah_komentar_live': np.random.randint(100, 10000, n_samples),
    'jumlah_share_live': np.random.randint(50, 5000, n_samples),
    'menggunakan_diskon': np.random.choice([0, 1], n_samples, p=[0.3, 0.7]),
    'menggunakan_voucher': np.random.choice([0, 1], n_samples, p=[0.4, 0.6]),
    'hari_live': np.random.choice(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'], n_samples),
    'waktu_live': np.random.choice(['Pagi', 'Siang', 'Sore', 'Malam'], n_samples),
    'kategori_produk': np.random.choice(['Fashion', 'Elektronik', 'Kecantikan', 'Rumah Tangga', 'Mainan'], n_samples),
    'interaksi_dengan_penonton': np.random.uniform(0, 1, n_samples),
    'penghasilan': np.random.uniform(100000, 10000000, n_samples)
}

# Create DataFrame
df = pd.DataFrame(data)

# Display the first few rows of the DataFrame
print(df.head())

# Display the shape of the DataFrame
print(df.shape)
