# swoll_toll

![home_wireframe](https://user-images.githubusercontent.com/28022683/28089308-9705976c-6656-11e7-8dd3-8682986fa202.png)

![profile_swoll_wireframe](https://user-images.githubusercontent.com/28022683/28127522-e2973948-66fa-11e7-91d9-1b4d9ff1148d.png)

![exercises_swoll_wireframe](https://user-images.githubusercontent.com/28022683/28127537-e748fe5e-66fa-11e7-9df3-6ddcfe0727d8.png)

![charts_swoll_wireframe](https://user-images.githubusercontent.com/28022683/28127542-eadc859a-66fa-11e7-9420-06fff6900fbe.png)

![progress_swoll_wireframe](https://user-images.githubusercontent.com/28022683/28127549-f06d2834-66fa-11e7-8332-4c192be5e9e7.png)


User Story

#User Profile Page
As a user I should be able to signup for a profile on the site.
As a user I should be able to save my current body weight, and adjust when necessary.
As a user I should be able to upload a profile picture to be displayed in the upper right corner of all other pages.

#Exercises Page
Users will be able to select from seven seperate muscle groups.
After selecting a group, a default list of exercises will populate. There will be a form to submit a new exercise if the user chooses.
Exercises will populate into a table under column 1. Column 2 will have forms for each exercises to submit the amount of weight lifted. Column 3 will also have forms for each exercise, but will be used to store how many total reps were done before muscle failure. Total reps are entered assuming user did 3 seperate sets by default. 
After all exercise fields are completed, user will click 'Submit Workout' button to store the table to their profile. Table will be submitted with the current date and linked to calendar.
The submit button will send the inputted data to a table specifically for that muscle group, ordered chronologically.

#Charts Page
User will choose muscle group from dropdown menu, then choose the desired month of results in a seperate dropdown menu.
Table displaying inputted data of the chosen month will populate on the left side of the page. 
Upon clicking the each specific exercise, on the right side of the page a line graph will reflect weight lifted on the X axis and total reps on the Y axis.
Button on bottom right corner will link user to Progress page

#Progress Page
The Progress page will once again give user the option to choose a muscle group.
When a muscle group is chosen, two tables will open by default; 'This Month' and 'Year to Date'
##Each table will contain three columns
Column 1 will display each exercise in the chosen muscle group
Column 2 will display the result of the equation (weight * total reps) for the earliest date of the current month in the 'This Month' table and the earliest submission of the year in the 'Year to Date' table that a workout was submitted for the chosen muscle group. 
Column 3 will display the result of the equation (weight * total reps) for the latest date of the current month in the 'This Month' table and the most recent submission in the 'Year to Date' table that a workout was submitted for the chosen muscle group. 
User will have ability to press a button that performs equation ((weight2 - weight1)/(reps2 + reps1))/(weight2 - weight1), which will display resulted percentage increase/decrease in "gainz"

