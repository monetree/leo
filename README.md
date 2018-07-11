Reporter: Thoudam Leo
assiged to: soubhagya kumar pradhan

Disclaimer:
This task took me 5hrs to complete so, please have look at this by running it on your system

steps to run the project:
  step1: import the leo.sql file intoyour mysql database
  step2:change the database password inside application/config/database.py
  step3:got to this url : http://[::1]/leo/index.php/admin
      email:admin@leo.me
      password:Thinkonce
  step4:use above credentials to login into admin panel




task -> refer the pdf from repository.

Technology used: php(codeigniter),angularjs,javascript,html,css,bootstarap
thanks to:sweet alert and font awesome
created on : 2018 july 12


Pages:
  1:http://[::1]/leo/(index page for users)
  2:http://[::1]/leo/index.php/admin(admin panel login) -> restricted(admin can access only)
  3.http://[::1]/leo/index.php/dashboard(admin panel dashboard)->restricted(where admin can make changes..)
  4.404 not found(when user enter an invalid url it will redirect to 404 page)

Advance features:
  Created in mvc artitacture with asynchronous feature to avoid loading pages and better user experience.Api has been created for all data because other client can access the data if admin permits.
Basic features:
  Admin can add user details,modify delete and update them.
  admin can't access dashboard without logging in.
  if admin is logged in and moving to login page it will redirect him to dashboard because session is set.
  one contact us for is there in index page for user query.

Note: Make sure that allow cross origin is not restricted.if it is then use this pluin to avoid it because it is asynchronous application. that happens with localhost only by browser or security purpose. its a good thing not an issue.

link:https://chrome.google.com/webstore/detail/allow-control-allow-origi/nlfbmbojpeacfghkpbjhddihlkkiljbi?hl=en-GB
