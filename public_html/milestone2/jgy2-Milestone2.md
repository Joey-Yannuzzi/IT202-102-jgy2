<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Joseph Yannuzzi (jgy2)</td></tr>
<tr><td> <em>Generated: </em> 5/9/2023 1:08:31 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-102-S23/it202-milestone-2-arcade-project/grade/jgy2" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediately</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Pick a game... </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game will you be doing?</td></tr>
<tr><td> <em>Response:</em> <p>Arcade shoot<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly describe it and its mechanics</td></tr>
<tr><td> <em>Response:</em> <p>Move the player square with W/S.&nbsp; Shoot the enemy boxes coming at the<br>player by pressing space.&nbsp; Don&#39;t let the boxes get past you, as it<br>decreases your score.&nbsp; The game ends if you lose all your points, or<br>if a box hits you.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing something of the game</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236700435-4d8dbbc6-1b4b-48e2-84f0-9e5d8f9b1dc9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>gameplay<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Joey-Yannuzzi/IT202-102-jgy2/pull/19">https://github.com/Joey-Yannuzzi/IT202-102-jgy2/pull/19</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jgy2-prod.herokuapp.com/project/game.php">https://jgy2-prod.herokuapp.com/project/game.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Saving Score </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing a notice telling the user their score was saved</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236701448-a7a8081b-5386-401e-ac9d-dcf9e840dbbc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>already successfully made table on local machine<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of your scores table from the db with some score entries</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236996468-f214e89d-e2da-4622-91fa-fa74d4acf48e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>my friends helped me populate the scores<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of the save score code logic</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236996628-e7bd3645-ed42-4542-a284-dd7b2ff9e7ef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>save_score.php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly describe the code flow of saving a score from the game</td></tr>
<tr><td> <em>Response:</em> <p>The score is sent to php from javascript.&nbsp; It then adds an entry<br>to the table with the score, username and an auto-generated id and timestamp.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Joey-Yannuzzi/IT202-102-jgy2/pull/21">https://github.com/Joey-Yannuzzi/IT202-102-jgy2/pull/21</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's last 10 scores </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the latest scores for the user from their profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236997116-e2362d6e-1fe0-4094-a56a-428430a01339.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>weird bug where tables do not center on my PC&#39;s instance of the<br>heroku dev app, however the scoreboards properly center on my friend&#39;s computer (I<br>changed the css file using f12 for demonstration purposes)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the scores are being pulled and displayed</td></tr>
<tr><td> <em>Response:</em> <p>On the home screen of the user, if the user is logged in,<br>it displays their latest scores.&nbsp; It looks in the database for a username<br>that equals the username from the scores table.&nbsp; If no user exists (meaning<br>the user never played the game) then no results show up.&nbsp; If the<br>user did play the game, their best score shows up AND their latest<br>scores.&nbsp; It will display a max of 10.&nbsp; For making the table, the<br>php runs a for each loop to generate a new row for each<br>score.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Joey-Yannuzzi/IT202-102-jgy2/pull/24">https://github.com/Joey-Yannuzzi/IT202-102-jgy2/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jgy2-prod.herokuapp.com/project/home.php">https://jgy2-prod.herokuapp.com/project/home.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Create function(s) for outputting the 4 different scoreboard durations (daily, weekly, monthly, lifetime) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot (or screenshots) showing the function(s)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236998017-7565b284-b53c-490c-ac72-8bd1095d6a5a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>get top 10<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236998110-a8d44e52-5626-43c6-b303-20361ee2916f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>get best score<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236998221-b5eb3ec2-c1fd-431b-b7ba-113d87181d18.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>get latest score<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the process of how the code works</td></tr>
<tr><td> <em>Response:</em> <p>Get top 10 looks for the top ten scores and displays them.&nbsp; Get<br>best score gets the best score and displays it.&nbsp; Get latest score finds<br>the score with the most recent timestamp and displays it.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Joey-Yannuzzi/IT202-102-jgy2/pull/24">https://github.com/Joey-Yannuzzi/IT202-102-jgy2/pull/24</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Home Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the scoreboads, the link to the game and description, and the proper heading</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236998750-425753be-62e7-4b13-9e11-9f017d0af8c0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>displays all scoreboards and personal scores (zoomed out to fit snip doesn&#39;t actually<br>look this small).  Game link located in navigation bar at the top.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the different pieces are retrieved and shown to the user</td></tr>
<tr><td> <em>Response:</em> <p>Using the functions and the display loops, the scoreboards are displayed.&nbsp; I added<br>the game link to the navigation bar, and it shows up if the<br>user is logged in.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Joey-Yannuzzi/IT202-102-jgy2/pull/22">https://github.com/Joey-Yannuzzi/IT202-102-jgy2/pull/22</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jgy2-prod.herokuapp.com/project/home.php">https://jgy2-prod.herokuapp.com/project/home.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236999224-cf57ed32-5238-4363-a672-679f66d7f90a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>all my pull requests<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jgy2-prod.herokuapp.com/project/index.php">https://jgy2-prod.herokuapp.com/project/index.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-102-S23/it202-milestone-2-arcade-project/grade/jgy2" target="_blank">Grading</a></td></tr></table>