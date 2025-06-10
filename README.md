# ToDo List Application

This project is a simple web-based ToDo List application that allows users to manage their tasks. It provides core functionalities for adding, viewing, updating, and deleting tasks.

## Project Purpose

The main goal of this application is to provide a straightforward and effective way to keep track of daily tasks. It demonstrates fundamental web development concepts, including server-side scripting, database interaction, and basic front-end styling.

## Features

Based on the file structure, this ToDo List application likely includes the following features:

* **Add Tasks**: Ability to input and save new tasks.
* **Display Tasks**: View a list of all existing tasks.
* **Update Tasks**: Modify the name or status of existing tasks.
* **Delete Tasks**: Remove tasks that are no longer needed.
* **Database Integration**: Tasks are stored persistently in a database.

## Technologies Used

The application is primarily built using:

* **PHP (93.6%)**: Handles all the server-side logic, including database operations (connecting, querying, inserting, updating, deleting tasks).
* **CSS (6.4%)**: Provides styling to make the user interface visually appealing and user-friendly.
* **HTML**: (Implied, as PHP typically generates HTML) Structures the web pages for displaying tasks and forms.
* **Database**: (Likely MySQL or similar, inferred from `db_connection.php` and task management) Used to store task details.

## Project Structure (Key Files)

The project consists of the following key files:

* `db_connection.php`: Establishes the connection to the database.
* `index.php`: Likely the main entry point of the application, possibly displaying tasks and providing options to add new ones.
* `display_tasks.php`: Handles the logic for retrieving and displaying tasks from the database.
* `update_tasks.php`: Contains the logic and form for updating existing tasks.
* `delete_tasks.php`: Manages the deletion of tasks from the database.
* `style.css`: Contains all the CSS rules for styling the application's interface.

## How to Run the Project

To set up and run this ToDo List application locally, you'll need a web server environment that supports PHP and a MySQL database.

**1. Prerequisites:**

* **Web Server with PHP:** Install a local server package like [XAMPP](https://www.apachefriends.org/index.html), [WAMP](https://www.wampserver.com/en/), or [MAMP](https://www.mamp.info/en/) on your system. Ensure Apache and MySQL services are running.
* **Web Browser:** Any modern web browser (Chrome, Firefox, Edge, Safari).

**2. Clone the Repository:**

* Open your Git Bash or command prompt.
* Navigate to your web server's document root (e.g., `C:\xampp\htdocs\` for XAMPP, `C:\wamp64\www\` for WAMP, or `/Applications/MAMP/htdocs/` for MAMP).
* Clone the project into this directory:
    ```bash
    git clone [https://github.com/Arinyamaurya/toDo_list.git](https://github.com/Arinyamaurya/toDo_list.git)
    ```
    This will create a `toDo_list` folder in your web server's root.

**3. Database Setup:**

* **Access phpMyAdmin:** Open your web browser and go to `http://localhost/phpmyadmin/`.
* **Create a New Database:** Create a new database (e.g., `todo_db`).
* **Create `tasks` table:** You'll need to create a table named `tasks` within your new database. A basic structure might look like this:

    ```sql
    CREATE TABLE tasks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        task_name VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```
    You can execute this SQL query directly in phpMyAdmin under the SQL tab.

**4. Configure Database Connection:**

* Open the `db_connection.php` file in your `toDo_list` project folder using a text editor (like VS Code).
* Update the database connection details (`$servername`, `$username`, `$password`, `$dbname`) to match your local MySQL setup and the database name you created.

**5. Access the Application:**

* Open your web browser.
* Navigate to the project's URL. Assuming you cloned it into `htdocs/toDo_list`, the URL would be:
    ```
    http://localhost/toDo_list/
    ```

You should now see your ToDo List application running!
