# codathon_codejudge
This is the codejudge version for windows... Before using the codejudge you will have to do certain things inorder to use the codejudge,user account control,admin panel and automatic ranking system.
1) Create a mysql database at at first in your phpmyadmin and give it's name as "codathon".
2) now import the two .sql files, users.sql and problems.sql in your database.
3) open the "connections.php" file and edit the file. Use your "hostname","userid","password",
don't change the database name unless you have given the main database name something else than "codathon".
Now the last step,
4)copy the JAVA and gcc/g++ compiler in the "compiler" directory of "codathon".
copy the entire content of your jdk directory ( where JDK is installed)  in "compiler/java" directory.
For C++, copy all the files of your gcc/g++ or MinGW ( if you have installed Code Blocks) to the "compiler/cpp" directory of this project.
