<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Joseph Yannuzzi (jgy2)</td></tr>
<tr><td> <em>Generated: </em> 5/4/2023 8:10:14 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-102-S23/hw-html5-canvas-game/grade/jgy2" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Create a branch for this assignment called&nbsp;<em>M6-HTML5-Canvas</em></li><li>Pick a base HTML5 game from&nbsp;<a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li><li>Create a folder inside public_html called&nbsp;<em>M6</em></li><li>Create an html5.html file in your M6 folder (do not put it in Project even if you're doing arcade)</li><li>Copy one of the base games (from the above link)</li><li>Add/Commit the baseline of the game you'll mod for this assignment&nbsp;<em>(Do this before you start any mods/changes)</em></li><li>Make two significant changes<ol><li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li><li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li><li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li></ol></li><li>Evidence/Screenshots<ol><li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li><li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li><li>Remember to include your ucid/date as comments in any screenshots that have code</li><li>Ensure your screenshots load and are visible from the md file in step 9</li></ol></li><li>In the M6 folder create a new file called m6_submission.md</li><li>Save your below responses, generate the markdown, and paste the output to this file</li><li>Add/commit/push all related files as necessary</li><li>Merge your pull request once you're satisfied with the .md file and the canvas game mods</li><li>Create a new pull request from dev to prod and merge it</li><li>Locally checkout dev and pull the merged changes from step 12</li></ol><p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>I modified the Arcade shooter game.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jgy2-prod.herokuapp.com/M6/game.html">https://jgy2-prod.herokuapp.com/M6/game.html</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Joey-Yannuzzi/IT202-102-jgy2/pull/10">https://github.com/Joey-Yannuzzi/IT202-102-jgy2/pull/10</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>Modification 1: I changed some controls around, so now the player moves with<br>W/S.<br>Modification 2: Missing blocks no longer ends the game, but does decrement score.&nbsp;<br>If score is 0, the game will end if the player misses a<br>block.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236353502-e8bc02a0-ae90-4b25-9095-e422a74fa33f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screen accurately displays updated controls<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236354180-940cd306-5461-4397-83a4-fc028e652027.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>control changes<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236354269-9fb92b13-fbc7-4385-8309-1d6334d44c36.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>visual changes (for controls)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236354408-a0334a77-43e8-4b18-bf97-55bc213e35fd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>code for blocks not ending game/decrementing score (located in draw())<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>Modification 3: Players can now click the game over screen to replay the<br><br>game.&nbsp; Scores are stored locally through the javascript, and the game <br>will tell<br>you if you got a high score (or what the high score is<br>if you <br>did not get a new one) when the game ends (only<br>displays high score <br>information after at least two games have been played).<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236353739-e3c5b5dd-e113-4d43-9c5c-e33065684f36.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>display if no new high score<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236353837-bbc2b4e3-f31c-4aac-a976-5b158224cbd5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>display if high score<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236354578-b59a2a60-ec8c-4797-b7a3-50a6877b8961.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>displays end game stats, and opens up click event for new game to<br>start (startGame() resets certain vars before beginning, like score)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/28871999/236354718-459f7dbb-5a16-4b38-9a5a-6eedea894303.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>scoreCheck() function, checks for high score and returns high score (scores is an<br>array defined at the top of the code, it gets populated at the<br>end of each game)<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>I learned that the squares&#39; origin points are in the corners.&nbsp; At first,<br>I wanted players to be able to charge up the shot to make<br>it bigger, but that did not properly spawn in the bullet, as it<br>spawned relative to the top left corner, not the center.&nbsp; Larger bullets also<br>gave problems, as their &quot;hit boxes&quot; did not properly collide with the enemy<br>(even if it was touching the enemy).&nbsp; I also learned that event.KeyCode is<br>deprecated on some browsers, which is why I switched to event.code (its also<br>easier to read as a whole).<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-102-S23/hw-html5-canvas-game/grade/jgy2" target="_blank">Grading</a></td></tr></table>