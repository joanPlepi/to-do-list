### The application consists in a list of task for every person and can update the status of each task by marking it as complete. 

### The application has two JSON files:
1. names.json: contains information about the employees like name, username address etc. 
2. tasks.json: contains the corresponding taks for every user its title and its status completed or not.

The index.html contains the html part and javascript. I use AJAX to make request to the server to read the json files. After I read the information in JSON file, I use JQuery to edit the DOM of the webpage. 
After a change has been done and a task has been marked completed (by clicking the button in the right of the task) an AJAX request has been done to the server and the file updateFile.php is executed. That one makes the corresponding update in the status of the task by making it as completed and send the response back to the browser. The corresponding task is striked out in the broweser, indicating that the task is now completed.
Also I have used Bootstrap to edit the style of the page. 

#### *Note: The javascript is not put in a seperate file because the purpose of the code was to try and play around with AJAX.
