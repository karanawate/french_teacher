
Login system create.
  - Done  proper validation,
  - Done  after login show name in sidebar
  - Done  mentioned name logout option. 

forgot password get otp send
 - Done otp button click show input box
 - Done and validation check property_exist or not
 - Done after login show dashbord of teacher
 - Done check valid otp or not 
 - 
 
vendor crud operation
- create edit & update
- validtion in train request method using
-


Login
- username and password valid
- if valid put in Session::put('usersession', $usersession);
- anywhere we can access $usersession = Session::get('usersession');
- we can access $usersession[]->name;
- every page check validation or not if validation 
   
Logout
click on logout button goes to public function
Session::forget('usersession');
Session::flush();




