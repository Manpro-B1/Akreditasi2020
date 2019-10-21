# Akreditasi2020
"Mini" project untuk kebutuhan kuliah Manajemen Proyek

## Description
Project ini dibuat untuk mensimulasikan project untuk keperluan Akreditasi dalam kuliah Manajemen Proyek. <br>
Akan ada 4 modul dalam pekerjaan ini:<br>
1. Homepage <br>
2. Sumber Daya Manusia, Keuangan, Sarana Dan Prasarana Penelitian, Pengabdian Kepada Masyarakat <br>
3. Pendidikan <br>
4. Luaran Dan Capaian Tridharma <br>
<br>
Setiap tim mendapatkan branch untuk masing-masing modul. <br>
Di akhir, setiap branch akan diintegrasikan dengan branch master melalui Pull Request (dilakukan oleh ketua setiap modul)

## Set Up Project
To set up your project (If you're using `git`): <br>
Find the right path on your folder and open your cmd: 
1. `git clone https://github.com/Manpro-B1/Akreditasi2020.git` <br>
2. `git checkout <branch_name>` <br>
`branch_name`: nama masing-masing modul <br>

To check your current stages: <br>
`git status`

## Set Up Connection
1. cek versi php dan cek windowsnya berapa bit <br>
![image](https://user-images.githubusercontent.com/44316758/67177368-7876c780-f3f8-11e9-8ba9-141191b2e2a6.png) <br>
2. buka file SQLSRV_Readme <br>
![image](https://user-images.githubusercontent.com/44316758/67177420-9fcd9480-f3f8-11e9-9105-81cedee45c47.png) <br>
3. pilih driver file dan pilih yang thread safe <br>
![image](https://user-images.githubusercontent.com/44316758/67177438-ba077280-f3f8-11e9-96d0-ad2f4ca3460f.png) <br>
4. copy file yang dipilih ke folder xampp/php/ext <br>
![image](https://user-images.githubusercontent.com/44316758/67177481-ef13c500-f3f8-11e9-91ac-f7cbcc9bde95.png) <br>
5. buka file php.ini <br>
![image](https://user-images.githubusercontent.com/44316758/67177507-094da300-f3f9-11e9-859a-343c9d0c562c.png) <br>
6. tambahkan `extension=<nama_file>` (tanpa ;) di bagian Dynamic Extensions bagian Notes for Windows environments
![image](https://user-images.githubusercontent.com/44316758/67177541-25e9db00-f3f9-11e9-9d2a-b267db8a6c7f.png)

## Working on the project
If you have clone the repository, go to your folder on your local computer:
1. `git pull`
2. open your editor and work on that project, if it is done:
3. `git add .`
4. `git commit -m "<message>"`
5. `git push origin <branch_name>`
