
<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="news.css">
    <title>News</title>
</head>
<script>
        function showDetails() {
            var details = document.getElementById('details');
            var button = document.getElementById('toggleButton');
            var sentence = document.getElementById('sentence');

            if (details.style.display === 'none') {
                details.style.display = 'block'; // Details dikhana
                sentence.style.marginTop = '10px'; // Sentence ko neeche karna
            } else {
                details.style.display = 'none'; // Details chhupana
                sentence.style.marginTop = '0'; // Sentence ka margin wapas karna
            }
        }
        function showDetails4() {
            var detailss = document.getElementById('detailsSSs');
            var buttons = document.getElementById('toggleButton4');
            var sentences = document.getElementById('footer11');

            if (detailss.style.display === 'none') {
                detailss.style.display = 'block'; // Details dikhana
                sentences.style.marginTop = '10px'; // Sentence ko neeche karna
            } else {
                detailss.style.display = 'none'; // Details chhupana
                sentences.style.marginTop = '0'; // Sentence ka margin wapas karna
            }
        }
        function showDetails2() {
            var details = document.getElementById('detailsS');
            var button = document.getElementById('toggleButton2');
            var sentence = document.getElementById('sentenceS');

            if (details.style.display === 'none') {
                details.style.display = 'block'; // Details dikhana
                sentence.style.marginTop = '10px'; // Sentence ko neeche karna
            } else {
                details.style.display = 'none'; // Details chhupana
                sentence.style.marginTop = '0'; // Sentence ka margin wapas karna
            }
        }

        function showDetails3() {
            var details = document.getElementById('detailsSs');
            var button = document.getElementById('toggleButton3');
            var sentence = document.getElementById('sentenceS');

            if (details.style.display === 'none') {
                details.style.display = 'block'; // Details dikhana
                sentence.style.marginTop = '10px'; // Sentence ko neeche karna
            } else {
                details.style.display = 'none'; // Details chhupana
                sentence.style.marginTop = '0'; // Sentence ka margin wapas karna
            }
        }
    </script>
<body>
    <div class="navigation" style="position: fixed;" >
            <div class="websitename">MS OCCUPANCY</div>&emsp;
            <a href="index.php"><div class="box1">
                Home
            </div></a>
            <a href="information.php"><div class="box1">
                Delay
            </div></a>
            <a href="news.php"><div class="box1">
                News
            </div></a>
            <a href="reserve.php"><div class="box1">
            Booking
            </div></a>
            <a href="contact.php"><div class="box3">
                Contact
            </div></a>
            <a href="login.php"><div class="box1">
                Login
            </div></a>
            <div class="socialmedia">
            <a href="example.php"><span class="socialmediazooming" ><i class="fa-solid fa-magnifying-glass"></i></span></a> 
               <a href="https://www.facebook.com/"> <span class="socialmediazooming" ><i class="fa-brands fa-facebook"></i></span></a>
               <a href="https://www.instagram.com/"> <span class="socialmediazooming" ><i class="fa-brands fa-instagram"></i> </span></a> 
               <a href="https://x.com/"> <span class="socialmediazooming" ><i class="fa-brands fa-twitter"></i></span></a>
               <a href="https://web.whatsapp.com/"> <span class="socialmediazooming" ><i class="fa-brands fa-whatsapp"></i></span></a>
            </div>
            <div class="get-started">
            <a href="logout.php"> <span class="getsartedspan" style="font-family:sans-serif;font-size: 22px;font-weight: 600;" >Logout</span> </a>
            </div>
    </div>
<br><br><br><br>
    <div class="outerdiv" >
        <h1>Mumbai-Howrah Train Accident: 2 Killed As 18 Coaches Derail In Jharkhand</h1>
        
        <p > <span class="design" > Howrah-Mumbai Train Derailment:</span> Train number 12810, Howrah-Mumbai Mail, derailed at around 3.45 am near Badabamboo, under the Chakradharpur Division of the South Eastern Railway.</p>

        <img src="images/news1.webp" alt="Train Accident Howrah-Mumbai" style="margin-left: 100px;" ><br>
        <span style="margin-left: 100px; color: rgb(91, 87, 87); " >Jharkhand Train Accident: Howrah-Mumbai Mail derailed near Badabamboo</span><br><br>
        <button id="toggleButton" onclick="showDetails()" style=" cursor: pointer;" >See More...</button>
        <div id="details" class="details" >
        <p> <span class="design" > Mumbai-Howrah Train Accident: </span> <span style="background-color: #dcd0ff;" >Two people were killed and 20 others injured after at</span> least 18 coaches of a train bound for Mumbai derailed in Jharkhand this morning.</p>
        <p>Train number 12810, Howrah-Mumbai Mail, derailed at around 3.45 am near Badabamboo, under the Chakradharpur Division of the South Eastern Railway.</p>
        
        
        <p>The Howara-CSMT Express derailed near Badabamboo, around 80 km from Jamshedpur at around 3.45 am. Rescue teams were rushed to the site immediately after the derailment was notified and a rescue and relief operation is on, officials said. </p>
        <p> "Two people were killed and 20 injured as 18 coaches of Howrah-Mumbai Mail derailed near Barabamboo. Rescue operations are on and an NDRF team is rushing to the spot," West Singhbhum Deputy Commissioner Kuldeep Chaudhary, who is camping at the accident site, told PTI.</p>
        <p>Senior Railways official Om Prakash Charan said that a goods train had also derailed nearby, but it was not yet clear whether the two accidents occurred concurrently.</p>
        <p>Of the 18 coaches that derailed, 16 were passenger coaches, one power car and one pantry car, he said.</p>
        <p>The injured were given first aid by the Railways' medical team, officials said, adding that they have now been taken to Chakradharpur for better treatment.</p>
        <p>The Indian Railways has issued the following helpline numbers: Tatanagar: 06572290324, Chakradharpur: 06587238072, Rourkela: 06612501072, 06612500244, Howrah: 9433357920, 03326382217, Ranchi: 06512787115 and Mumbai: 02222694040.</p>
        </div>
         <br>
        <hr><br>
        <h1 id="sentence" style="margin-top: 0;" >UP Gonda Train Accident Live Updates: Death toll rises to 4, high-level probe underway</h1>
        <p> <span class="design" > UP Gonda Train Accident Live Updates:</span> The body was recovered when the bogie, which had turned turtle in the incident, was lifted by a crane, said a railway officer.</p>
        <img src="images/news2.webp" alt="Gonda Train Accident" style="margin-left: 50px;" ><br>
        <span style="margin-left: 100px; color: rgb(91, 87, 87); " > UP Gonda Train Accident Live Updates: Passengers near the derailed coaches of the Chandigarh-Dibrugarh Express, in Gonda district, Thursday (PTI)</span><br><br>
       
        <button id="toggleButton2" onclick="showDetails2()" style=" cursor: pointer;" >See More...</button>
        <div  id="detailsS" class="details" >
            <p>
            <span class="design" >UP Gonda Train Accident Live Updates: </span>With the recovery of one more body inside a bogie on Friday morning, the total number of deaths due to the derailment of the Dibrugarh Express train rose to four. The body was recovered when the bogie, which had turned turtle in the incident, was lifted by a crane, said a railway officer.
            </p>

            <p  > <span class="design" > Probe underway, ex-gratia announced:</span> Railways and the UP Police have begun probe into the claims of the train’s loco pilot. The loco pilot said he heard an explosion just before the derailment. Among the six seriously injured persons, the condition of four is stable and they are out of danger. An ex-gratia of Rs 10 lakh for the kin of the deceased and Rs 2.5 lakh for those grievously injured, Rs 50,000 for those with minor injured, <SPAN id="toggleButton3" onclick="showDetails3()" style="background-color: #dcd0ff; cursor: pointer;  text-decoration: underline; " > was announced by the Railways. </SPAN>
                <div id="detailsSs" class="details">
                    <img src="images/news2-1.avif" alt="Train accident " style="margin-left: 50px;" ><br>
                    <p> On Thursday afternoon, the Chandigarh-Dibrugarh Express derailed between Jhilahi and Motiganj railway stations in Gonda district, Uttar Pradesh. The derailment, which occurred around 2:30 pm, resulted in the overturning of six coaches of the Assam-bound train. (Express Photo/Vishal Srivastava) </p>

                    <img src="images/news2-2.avif" alt="Train Accident " style="margin-left: 50px;" ><br>
                    <p>Rescue operations led by senior railway and local administration officials swiftly commenced, with medical vans promptly reaching the accident site. There were reported casualties and fatalities. (Express Photo/Vishal Srivastava)</p>

                    <img src="images/news3-3.avif" alt="Train Accident" style="margin-left: 50px;" ><br>
                    <p>The injured were provided with immediate medical assistance and have been admitted to nearby health facilities for further treatment. (Express Photo/Vishal Srivastava)</p>

                    <img src="images/news2-4.avif" alt="Train Accident" style="margin-left: 50px;" ><br>
                    <p>Authorities have assured that all passengers have been accounted for and rescue operations have concluded. (Express Photo/Vishal Srivastava)</p>

                    <img src="images/news2-5.avif" alt="Train Accident" style="margin-left: 50px;" ><br>
                    <p>The cause of the derailment remains under investigation, with the train's loco pilot reporting hearing an explosion just before the incident. A high-level inquiry has been initiated by railway authorities to determine the exact circumstances leading to the derailment. (Express Photo/Vishal Srivastava)</p>
                </div>
            </p>
            <p> <span class="design" >  What a passenger said ?</span> “For a moment the coach was filled with dust and it was all dark. I don’t remember what happened in the next few seconds. I only remember the cries and that a passenger pulled my hand, and helped me get out of the window,” PTI quoted a passenger, Sandeep Kumar, as saying.</p>
        </div>

        <hr><br>

        <h1 id="sentenceS" style="margin-top: 0;" >Bihar train accident: Northeast Express derails near Buxar, 4 dead and 60 injured </h1>

        <img src="images/news444.avif" alt="Train Accident" style="margin-left: 50px;" height="400" width="700" ><br><br>
        <button id="toggleButton4" onclick="showDetails4()" style=" cursor: pointer;"  >See More...</button>

        <div  id="detailsSSs" class="details">

        <p>On 2 June 2023, three trains collided in Balasore district in the east Indian state of Odisha. The accident occurred around 19:00 IST when Coromandel Express, a passenger train, collided with a stationary goods train near Bahanaga Bazar railway station on the Howrah–Chennai main line. Due to the high speed of the passenger train and the heavy tonnage of the goods train, the impact resulted in 21 coaches of the Coromandel Express derailing and three of those collided with the oncoming SMVT Bengaluru–Howrah Superfast Express on the adjacent track </p>
        <p> 296 people were killed in the crash and more than 1,200 were injured. It was one of the deadliest railway accidents in India. National Disaster Response Force (NDRF) and Odisha Disaster Rapid Action Force (ODRAF) were involved in the search and recovery efforts, assisted by other government agencies and the general public. The injured were treated at local hospitals in the region. In the aftermath, operations of more than 150 trains were impacted, with the cancellation of at least 48 trains. The rail services resumed on the line on 5 June after restoration work.</p>
        <p>Preliminary investigation revealed that the Coromandel Express entered a passing loop line instead of the main line at full speed and crashed into the stationary goods train. In the aftermath, Railway Minister stated that a change in electronic interlocking due to an error in electronic signalling, caused the crash. He also said that sabotage was suspected and the railway board had recommended a Central Bureau of Investigation (CBI)-led probe. On 7 July 2023, the CBI arrested three railway officials believed to be responsible for the accident</p>

        <p> Despite the statement of the railway authorities that the accident was not a reflection of the safety issues in the system, various questions were raised by journalists, politicians and retired railway employees. The railway lines were not equipped with the Kavach train protection system. It was made aware that a similar signalling error had been reported earlier in February 2023 and a December 2022 report by the Comptroller and Auditor General of India had warned that the safety department of the railways lacked adequate staffing and funding, suffered from misuse of funds and that these could impact the quality of maintenance.</p>
        </div>
        <p  id="sentenceSSs" style="margin-top: 0;">       </p>
    </div><hr>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer id="footer11" >
        <div class="footer-outer" >
            <div class="footer1" ><br><br>
                   <i class="fa-solid fa-location-dot font"></i> &emsp;
                   <span class="footer-text" > MH26 Nanded MGM  </span> <br>
                   <span class="footer-text" style="margin-left: 93px;" > Maharshtra, India </span> 
                        <br>
                   <i class="fa-solid fa-phone  font"></i> &emsp;
                   <span class="footer-text" >  +91 883 006 6800 </span> <br>
                   <span class="footer-text" style="margin-left: 98px;" >  +91 932 246 2481</span><br>

                   <i class="fa-regular fa-envelope font"></i> &emsp;
                   <span class="footer-text" style="position: relative; top:6px;" >  msoccupancy@gmail.com </span>
            </div>
            <div class="footer1" >
                <p class="texts" >About This Software</p>
                <i class="fa-solid fa-train font"></i>
                <span class="footer-text" style="margin-left: 20px; position: relative; top:6px;" > which train will come on the which  platform</span> <br> 
                <span class="footer-text" style="margin-left: 20px; position: relative; top:6px;" >  &emsp; &emsp; &emsp; at the station </span><br><br>
                <i class="fa-solid fa-ticket font"></i>
                <span class="footer-text" style="margin-left: 20px;  position: relative; top:6px;" >with the help of this Software you can buy  </span>  <br> 
                <span class="footer-text" style="margin-left: 20px;  position: relative; top:6px;">  &emsp; &emsp; &emsp; your platform ticket</span>
            </div>
        </div>
   </footer>
 
</body>
</html>