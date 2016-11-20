<div class="alert alert-success">mysql timestamp datatype allow us to insert current date and time of mysql server system, but it is not good approach
to insert the current date and time because mysql server can be running in US, UK etc so in shared hosting or some hosting doesn't allow to change the datetime.
<a target="_blank" href="http://stackoverflow.com/questions/930900/how-to-set-time-zone-of-mysql">Stackoverflow link to change the timezone in mysql</a>
</div>
<pre class="prettyprint">
create table student(
id int(11)unsigned not null auto_increment,
name varchar(255) not null,
email varchar(255) not null,
address text default null,
created_at timestamp default current_timestamp,
changed_at timestamp default current_timestamp on update current_timestamp,
primary key(id)
);
</pre>



<h3>Using Php Insert Current Date and Time</h3>
<pre class="prettyprint">
create table student(
id int(11)unsigned not null auto_increment,
name varchar(255) not null,
email varchar(255) not null,
address text default null,
created_at timestamp not null,
changed_at timestamp not null,
primary key(id)
);

==========================================================

&lt;php
date_default_timezone_set('Asia/Calcutta');
$stmt = $this->db->prepare("INSERT INTO student(name,email,address,created_at,changed_at) values(:name,:email,:address,:created_at,:changed_at)");
$stmt->bindParam (':name', $name );
$stmt->bindParam (':email', $email );
$stmt->bindParam (':address', $address );
$stmt->bindParam (':created_at',date('y-m-d h:i:s'));
$stmt->bindParam (':changed_at',date('y-m-d h:i:s'));
$stmt->execute();
</pre>