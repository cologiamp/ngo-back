# NGOs Donation Project, API REST Developer in PHP, Object Oriented Programming.

<br>
Import ngo.sql to MySQL Database
<br>
Upload the api folder to your web server directory (ex.: /var/www/html).
<br>

# DONATION AND NGO REST API ENDPOINTS

# POST - body { ngoId: 2, amount: 255.35 } 
<b>/action/post/donation - </b>(creates a new donation)
<hr>

# GET 

<b>/action/get/donations</b>  (selects all donations)<br>
<b>/action/get/ngos</b>  (selects all ngos)<br>
<b>/action/get/donation/?id={id}</b>  (selects unique donation)
<b>/action/get/ngo/?id={id}</b>  (selects unique ngo)
<hr>
