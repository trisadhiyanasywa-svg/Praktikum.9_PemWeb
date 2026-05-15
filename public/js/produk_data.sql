CREATE DATABASE IF NOT EXISTS toko_db;
USE toko_db;
DROP TABLE IF EXISTS produk;5
    CREATE TABLE produk (
        id INT PRIMARY KEY,
        nama_produk VARCHAR(100),
        kategori ENUM('Elektronik', 'Pakaian', 'Makanan', 'Minuman'),
        harga INT,
        stok INT
    );
    
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (1, 'Mouse', 'Elektronik', 498458, 70);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (2, 'Kaos', 'Pakaian', 100948, 70);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (3, 'Mouse', 'Elektronik', 195788, 44);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (4, 'Biskuit', 'Makanan', 99239, 4);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (5, 'Sepatu', 'Pakaian', 486861, 75);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (6, 'Kemeja', 'Pakaian', 465986, 48);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (7, 'Kopi', 'Minuman', 5943, 27);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (8, 'TV', 'Elektronik', 312385, 27);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (9, 'Biskuit', 'Makanan', 343926, 34);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (10, 'Kopi', 'Minuman', 100078, 7);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (11, 'Kopi', 'Minuman', 115983, 88);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (12, 'Kipas Angin', 'Elektronik', 243216, 79);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (13, 'Kipas Angin', 'Elektronik', 345467, 77);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (14, 'Roti', 'Makanan', 334369, 22);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (15, 'Kipas Angin', 'Elektronik', 354706, 44);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (16, 'Air Mineral', 'Minuman', 436963, 92);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (17, 'Susu', 'Minuman', 349250, 39);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (18, 'Laptop', 'Elektronik', 129771, 93);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (19, 'Air Mineral', 'Minuman', 179618, 68);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (20, 'Biskuit', 'Makanan', 389847, 12);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (21, 'Roti', 'Makanan', 464302, 44);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (22, 'Sepatu', 'Pakaian', 282544, 6);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (23, 'Kipas Angin', 'Elektronik', 444569, 23);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (24, 'Susu', 'Minuman', 121953, 58);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (25, 'Mouse', 'Elektronik', 457156, 23);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (26, 'Sandal', 'Pakaian', 394304, 95);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (27, 'Smartphone', 'Elektronik', 210038, 59);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (28, 'Susu', 'Minuman', 190629, 68);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (29, 'Roti', 'Makanan', 101917, 99);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (30, 'Sepatu', 'Pakaian', 76292, 67);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (31, 'Air Mineral', 'Minuman', 156269, 97);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (32, 'Kemeja', 'Pakaian', 49929, 99);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (33, 'Mouse', 'Elektronik', 10844, 41);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (34, 'Susu', 'Minuman', 34609, 32);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (35, 'Roti', 'Makanan', 322679, 31);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (36, 'Microwave', 'Elektronik', 477297, 55);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (37, 'Celana', 'Pakaian', 456974, 45);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (38, 'TV', 'Elektronik', 122432, 9);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (39, 'Microwave', 'Elektronik', 103759, 93);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (40, 'Roti', 'Makanan', 117310, 77);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (41, 'Kaos', 'Pakaian', 11519, 65);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (42, 'Smartphone', 'Elektronik', 135364, 4);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (43, 'Sepatu', 'Pakaian', 445845, 2);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (44, 'Keyboard', 'Elektronik', 48233, 12);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (45, 'Celana', 'Pakaian', 458907, 45);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (46, 'Printer', 'Elektronik', 351018, 94);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (47, 'Laptop', 'Elektronik', 328505, 96);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (48, 'Jaket', 'Pakaian', 389903, 16);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (49, 'TV', 'Elektronik', 237813, 49);
INSERT INTO produk (id, nama_produk, kategori, harga, stok) VALUES (50, 'Roti', 'Makanan', 348341, 63);