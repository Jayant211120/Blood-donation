<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='/website/css/mainkesath.css'>
</head>

<body>
    <header>
        <div id="main-div">
            <h3><a href='showdetailsuser.php'alt='No Image Found'>Checking Data</a></h3>
            <nav class="navbar">
                <ul class="navbar-unorderedlist">
                    <li class="navbar-list"><a href='#background'>HOME</a></li>
                    <li class="navbar-list"><a href='#about-heading'>ABOUT US</a></li>
                    <li class="navbar-list"><a href='#headingindetails'>GIVE DETAILS</a></li>
                    <li class="navbar-list"><a href='#contactheading'>CONTACT US</a></li>
                    <li class="navbar-list"><a href='fetchdata.php'>DONARS</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="background">
        <h1 id="about-heading">ABOUT-US</h1>
        <div class="container">
            <ul>
                <li>
                    <h4>What to Expect When You Give Bloods</h4>
                </li>
                <li>
                    <h4>Blood Donation Benefits</h4>
                </li>
                <li>
                    <h4>Before You Donate</h4>
                </li>
                <li>
                    <h4>The 4 Steps of Blood Donation</h4>
                </li>
                <li>
                    <h4>Side Effects After Donating Blood</h4>
                </li>
            </ul>
            <br>
            <p>If you've decided to donate blood, you may be curious about what to expect.
                Giving blood is a simple, safe way to make a big difference in people's lives.
                Knowing what will happen before, during, and after you donate can help you prepare
                for the process.</p>
            <br>
            <h4>Blood Donation Benefits</h4>
            <ul>
                <li>People who go through disasters or emergency situations.</li>
                <li>People who lose blood during major surgeries</li>
                <li>People who have lost blood because of a gastrointestinal bleed</li>
                <li>Women who have serious complications during pregnancy or childbirth
                    People with cancer or severe anemia sometimes caused by thalassemia or sickle cell disease.</li>
            </ul>
            <br>
            <h4>There are also potential benefits for people who regularly donate blood:</h4>
            <p>Lower iron levels in blood. This is a plus if your iron levels are too high.
                Donating blood removes some red blood cells, which carry iron throughout your body.
                Better cholesterol and triglyceride levels. In one study, researchers checked levels
                of total cholesterol, triglycerides, HDL (“good”) cholesterol, and LDL (“bad”) cholesterol
                in 52 people who regularly gave blood and 30 other people. Levels of triglycerides, total,
                and LDL cholesterol were all lower in those who regularly gave blood. It's not clear why.
                Emotional benefits from knowing you helped someone else, even if it's a stranger.
                There may also be benefits from taking part in a blood drive with other people from
                teaming up to do good.</p>
            <br>
            <h4>Before You Donate</h4>
            <p>If you think you want to donate blood, it's important to make sure you meet the
                requirements and that you properly prepare.</p>
            <br>
            <h4>Requirements for blood donation.</h4>
            <p>First, you'll need to find a blood bank or blood drive and make an appointment.
                Be sure to ask about any specific requirements for donors and what kinds of
                identification you need to bring with you.</p>
            <br>
            <b>You'll need to be:</b>
            <p>At least 17 to donate platelets in most states Weigh at least 110 pounds
                In good health and be feeling well</p>
            <br>
            <h4> The 4 Steps of Blood Donation</h4>
            <ul>
                <li>Registration</li>
                <li>Medical history and mini-physical</li>
                <li>Donation</li>
                <li>Refreshments</li>
                While the whole process, from the time you get to the facility to the time you leave, can take about an hour, the actual donation itself may take as little as 8-10 minutes. If you donate platelets, a machine filters the platelets out of your blood and returns the rest of your blood to you. This process takes longer (2-3 hours).
            </ul>
            <br>
            <h4>Side Effects After Donating Blood</h4>
            <p><b>There aren't any lasting side effects, but you may temporarily:</b>
                Need to hydrate. Drink more non-alcoholic beverages for 24-48 hours after you donate blood.
                Need to take it easy. Don't work out or do any hard physical activity for 24 hours after giving blood.
                Feel lightheaded. Lie down for a few minutes until you feel ready to get back up.
                Have a little bit of bleeding from the spot where you donated. Raise your arm and apply pressure to that spot for a few minutes.
                If you have bruising in that area, use an ice pack on it.</p>
        </div>
    </div>

    <div id="details">
        <h1 id='headingindetails'>Fill-Details For Donate Blood</h1>
        <form action='detailscaptured.php'method='POST'>
            <input type='text'name='username'placeholder='Enter Your Name*'required><br>
            <input type='email'name='email'placeholder='Enter Your E-Mail*'required><br>
            <input type='text'name='mobile'placeholder='Enter Your Mobile Number*'required><br>
            <input type='text'name='address'placeholder='Enter Your Address*'required><br>
            <input type='password'name='addhaar'placeholder='Enter Your Addhaar Number*'required><br>
            <select name='select'required>
                <option default>B+</option>
                <option>AB+</option>
                <option>B-</option>
                <option>AB-</option>
                <option>0+</option>
                <option>A+</option>
                <option>A-</option>
                <option>O-</option>
            </select><br>
            <br>
            <br>
            <label>Tick If Above 18*</label><br>
            <input type="checkbox"name='eighteen'class='check'required><br>
            <input type='submit'name='send'placeholder='Submit'class='btn'><br>
        </form>
    </div>

    <div id="contact">
        <h1 id='contactheading'>CONTACT US</h1><br>
        <form action="apnidetailsdena.php"method='POST'>
            <input type='text'name='username'placeholder='Enter Your Name*'required><br>
            <input type='email'name='mail'placeholder='Enter Your G-Mail*'required><br>
            <input type='text'name='mobile'placeholder='Enter Your Mobile Number*'required><br>
            <textarea name='suggestion'placeholder='Enter Any Suggestion'rows=3 cols=23></textarea><br>
            <input type='submit'name='send'placeholder='Submit' class='btn'>
        </form>
    </div>
    <footer class='foot'><h1>ThankYou</h1></footer>
</body>

</html>