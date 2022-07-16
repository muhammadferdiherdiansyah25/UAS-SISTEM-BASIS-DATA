# UAS-SISTEM-BASIS-DATA

# NAMA    : MUHAMMAD FERDI HERDIANSYAH
# NIM     : 312010038
# KELAS   : TI.20 D1
# MATA KUL: SISTEM BASIS DATA 
# DOSEN   : Muhammad Najamuddin Dwi Miharja, S.Kom, M.kom

# TAMPILAN DASHBORD KLINIK SEHAT SEJAHTERA

![image](https://user-images.githubusercontent.com/101733752/179364899-83c2fc4c-7faa-41a3-a851-743da71fd1ab.png)


# Tugas UTS sebelumnya saya membuat sebuah sistem informasi klinik sederhana. 

disini saya akan menampilkan : 

- Modul Data Pasien

![image](https://user-images.githubusercontent.com/101733752/179363220-1c95b553-9283-4ae4-afef-25f906647742.png)

- Dalam tabel pasien bisa menambahkan, menghapus dan mengedit data. Contohnya sebagai berikut :

- Menambahkan 

![image](https://user-images.githubusercontent.com/101733752/179363432-10b42fa3-64c8-459c-8105-a68084199521.png)

- Saya Menambahkan data pasien seperti gambar berikut.

![paint](https://user-images.githubusercontent.com/101733752/179363533-e3b03082-4813-479f-ac84-3bb4df382eaa.png)

- Edit

![image](https://user-images.githubusercontent.com/101733752/179363804-c7f12375-fd32-4c6b-b98b-d7d3b5acacde.png)

- Saya Mengubah/edit data pasien Deden menjadi Sangkuriang seperti gambar berikut.

![paint](https://user-images.githubusercontent.com/101733752/179363927-4e250d55-6c22-4653-b20b-8ff00446689f.png)

- Hapus

![image](https://user-images.githubusercontent.com/101733752/179364051-98ce7b28-fe80-46f5-8ead-5a5498ba784e.png)


- Modul data Dokter

Seperti data pasien data dokter bisa di berikan perintah tambah, hapus dan juga edit.

![image](https://user-images.githubusercontent.com/101733752/179364140-989bc35e-c93e-4210-8d72-3d4b44a8b21d.png)

- Modul data Obat

Di dalam modul data obat saya menambahkan Triger

// IMPLEMENTASI TRIGGER

// table untuk trigger

create table log_obat(id_log int(100) auto_increment primary key, id_obat int(10), nama_obat_lama varchar(100), nama_obat_baru varchar(100), waktu date not null) // trigger

create trigger update_nama_obat before update on obat for each row insert into log_obat set id_obat=old.id_obat, nama_obat_lama = old.nama_obat, nama_obat_baru=new.nama_obat, waktu = now();

// END IMPLEMENTASI TRIGGER

![image](https://user-images.githubusercontent.com/101733752/179364189-01711a97-b349-4201-a534-2cf61f9fb277.png)

![image](https://user-images.githubusercontent.com/101733752/179364242-9219838a-c7b6-444c-a973-5dad692834d6.png)

Fungsi dari triger disini untuk menampilkan perubahan nama obat setelah dilakukan proses update.

- Modul data user.

- Modul data user dibuat untuk melakukan proses login

![image](https://user-images.githubusercontent.com/101733752/179364856-2b2ba5f9-2839-406b-856b-8fbbadd8ffdc.png)

![image](https://user-images.githubusercontent.com/101733752/179364987-b965f76c-ad88-44f2-a8ab-c4eb0e1a174d.png)


- implementasi view
// IMPLEMENTASI VIEW

CREATE VIEW viewPenyakit AS SELECT a.id_berobat, b.nama_pasien, b.jenis_kelamin, b.umur, a.keluhan_pasien, a.hasil_diagnosa, a.tgl_berobat, c.nama_dokter FROM berobat a JOIN pasien b ON a.id_pasien=b.id_pasien JOIN dokter c ON a.id_dokter=c.id_dokter WHERE b.jenis_kelamin='L'

// END IMPLEMENTASI VIEW

![image](https://user-images.githubusercontent.com/101733752/179365158-8243b345-a97d-4f6a-86a8-17b05166f42e.png)

