###

1. When we visit `index.php`, it should start the session, initialize the session, but nothing in it yet
2. When we visit `name.php?user=Pan`, it should write into session
3. When we visit `about.php`, it should load info out of session
4. When we visit `end.php`, it should destory all sessions.



### TODO:
1. Finish a login page with a form
2. When we submit the form, it should check if the username and password are correct
3. If correct, it should redirect to `about.php` with a welcome message says "Welcome, {username}"
4. If not correct, it should redirect to `login.php` with a message says "Wrong username or password"
5. Let's say `about.php` to be only visible to logged in users, if we visit `about.php` without logging in, it should redirect to `login.php` with a message says "You need to login first"
6. When visits `logout.php`, it should destory all sessions and redirect to `login.php` with a message says "You have logged out
