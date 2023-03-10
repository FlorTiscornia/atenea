## Project name: Atenea
<h1> <img src="https://res.cloudinary.com/de1i08drf/image/upload/v1675077884/Atenea/cabezaBuhoAzulSmall_piqqgc.png" width="3.2%">   Atenea</h1>


## 📝Project description:
Atenea is an app to consult and manage school grades. This project is being developed in a context of Fullstack Bootcamp in Málaga.


## 📸Screenshots:
| Sketch | Figma | Atomic Design |Workflow|
| :---: | :---: | :---: | :---: |
|<img src="https://user-images.githubusercontent.com/113030390/218047493-11ac48b1-6081-4de5-93b3-e98d3b83b170.png" width="50%"> |<img src="https://user-images.githubusercontent.com/113030390/218046666-f83a1493-5d35-4563-8f39-8309086cb371.png" width="50%"> |<img src="https://user-images.githubusercontent.com/113030390/218046491-cfb78369-022c-4cf4-9cd0-82e1694c1c53.png" width="50%"> |<img src="https://user-images.githubusercontent.com/113030390/218044904-6be748b6-a49e-47e9-9e29-1a0d60e5fe99.png" width="50%">|

## Mobile format (Student):
<img style="width:150px;" src="https://user-images.githubusercontent.com/113030390/220130453-a7697d57-3d89-42fd-945a-346982e38310.png"> <img style="width:150px;" src="https://user-images.githubusercontent.com/113030390/220130514-9f11d5c3-34bd-4986-a7fd-8de0409c88ea.png">

## Screen format (teacher): 
<img src="https://user-images.githubusercontent.com/113030390/220175941-ee607751-b06d-4d20-8616-ca4e6ab4ed1a.png" width="50%"> <img src="https://user-images.githubusercontent.com/113030390/220176018-11d5b805-60f3-4f03-86f5-cc48d46ec826.png" width="50%"> <img src="https://user-images.githubusercontent.com/113030390/220176097-58395f34-246c-4213-8bf0-b5897ada17c3.png" width="50%">


## 🔧Stacks:
| Stacks |
| :--- |
|<img src="https://res.cloudinary.com/de1i08drf/image/upload/v1675244381/Atenea/stacks_fqertt.png">|

***
## 👩‍💻Group members:
+ FLor Tiscornia https://github.com/FlorTiscornia
+ Lola Navarro https://github.com/ZLoln
+ Lola García https://github.com/LolaGM
+ Carmen Gallardo https://github.com/CarmenGP
+ Verónica Flores https://github.com/veflo13
+ Elena Mª Pérez https://github.com/elenarjonap

## 💻How to install this project

1. Clone the project
```bash
git clone https://github.com/FlorTiscornia/atenea.git
```


2. Create a MySQL database called "Atenea"

3. Create an .env file in the text editor copying the content of .env.example and modify the name of the database (laravel by ¨Atenea¨)

4. Install dependencies
```bash
      install npm
```
```bash
      composer install
```

5. Activate the server and keep this terminal open
```bash
      npm run dev
```

6. Import database
```bash
      php artisan migrate:fresh --seed
```
7. Open php server
```bash
      php artisan serve
```   

## 👀Run test:
To run the tests open terminal and enter the command 
  
| php artisan test | vendor/bin/phpunit |
| :---: | :---: |
|<img src="https://user-images.githubusercontent.com/113030390/218048130-7f141539-755c-4793-9ee9-646ff8e03ae5.png" width="50%"> |<img src="https://user-images.githubusercontent.com/113030390/218048324-c30158fd-dfc6-45a6-9e8f-acbc20f5dee1.png" width="50%"> |

```

📚Methodology:
- Methodology Agile with Scrum.
- Mob Programming.
- Pair Programming.
- TDD.
- Software Design Pattern MVC developed with Laravel framework.


🧪Next Steps:
- Some design tweaks and improvements.
- Finish the CRUD of the grades and integrate the drag 'n drop.
- Add more teachers and subjects.
- Add more functions to the app such as exam dates or relevant information.
- Upgrade the app with more classrooms/groups, academic years and the possibility to develop it for multiple schools.

****The "gradesCopy" branch contains a partial CRUD in progress.****
