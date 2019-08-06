//php code
&amp;lt;?php
  // including FusionCharts PHP wrapper
  include(&amp;quot;/path/to/fusioncharts.php&amp;quot;); 
?&amp;gt;


//html code
&amp;lt;html&amp;gt;
 
&amp;lt;head&amp;gt;
  &amp;lt;!-- including FusionCharts JavaScript file --&amp;gt;
  &amp;lt;script type=&amp;quot;text/javascript&amp;quot; src=&amp;quot;/path/to/fusioncharts.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;
  &amp;lt;script type=&amp;quot;text/javascript&amp;quot; src=&amp;quot;/path/to/fusioncharts.charts.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;
&amp;lt;/head&amp;gt;
 
&amp;lt;/html&amp;gt;



//Initiate Connection with MySQL Database
&amp;lt;?php
 
    //setting up connection with database
    $host_db=&amp;quot;localhost&amp;quot;; // MySQL host server (might vary depending upon user)
    $user_db=&amp;quot;db_username&amp;quot;; // MySQL database username
    $pass_db=&amp;quot;db_password&amp;quot;; // MySQL password
    $name_db=&amp;quot;DB_name&amp;quot;; // name of the database
 
?&amp;gt;


// Validate Connection & Write SQL Query

$dbhandle = new mysqli($host_db, $user_db, $pass_db, $name_db);
 
if ($dbhandle -&amp;gt; connect_error) {
    exit(&amp;quot;There was an error with your connection: &amp;quot;.$dbhandle - &amp;gt; connect_error);
}



//