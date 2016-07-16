# codathon_codejudge_windows
<b>This is the codejudge version for Windows...</b>
<br/>
 <p>Before using the codejudge you will have to do certain things inorder to use the codejudge,user account control,admin panel and automatic ranking system.</p>p>

 
<ol>
  <li>Create a mysql database at at first in your phpmyadmin and give it's name as "codathon".</li>
  <li> Now import the two .sql files, users.sql and problems.sql in your database.They are in "database_table" directory of this project</li>
  <li> open the "connections.php" file and edit the file. Use your "hostname","userid","password", don't change the database name unless you have given the main database name something else than "codathon". </li>
  <li>
  	  <b style="color: #f58607;"> 
Copy the compilers into compiler directory. Copy everything from inside g++ or gcc or "MinGW directory" from "compiler/cpp" directory of this project. For java, copy everything from your JDK directory to the "compiler/java directory" 
  </b>
  </li>
  </ol>
  <hr />
  <b>Windows version is not stable, please use linux version which is faster, and more secure </b> 
