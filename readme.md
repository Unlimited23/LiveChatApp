# Laravel based live chat app

## How to use:

* Step 1 - Clone the repository:
Run the following command in a cmd:

`git clone https://github.com/Unlimited23/LiveChatApp.git`

* Step 2 - Navigate to the project folder:
Run the following command in a cmd:

`cd LiveChatApp/`

* Step 3 - Create a MySQL database.

* Step 4 - Copy .env.example to .env and edit the database credentials accordingly.

* Step 5 - In .env file change BROADCAST_DRIVER=pusher.

* Step 6 - Create a pusher account from : https://dashboard.pusher.com/accounts/sign_up.

* Step 7 - In .env change PUSHER_APP_<> credentials accordingly from your pusher account.

* Step 8 - Install all dependencies:
Run the following command in a cmd:

`composer install`

* Step 9 - Migrate the database
Run the following command in a cmd:

`php artisan migrate`

* Step 10 - Run the project
Run the following command in a cmd:

`php artisan serve`
