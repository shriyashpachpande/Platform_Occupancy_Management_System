let availableKeywords = [
    'Achalpur','Hafizpur', 'Adas Road',' Hatkanagale','Adgaon Buzurg','Helak' ,'Ahmednagar',' Hempur',
'Ajni', 'Himayatnagar','Ajnod','Hinganghat' ,'Akkalkot Road' , 'Hingoli Deccan','Akola Junction', 'Hol','Akolner', ' AKR Hotgi','Akot' , 'Ichanagar','Akurdi', ' Igatpuri','Amalner' ,'Indapur','Ambarnath' , 'Islampur','Amgaon', 'Itwari','Amravati', 'Jaksi','Andheri','Jalamb Junction','Ankai ','Jalgaon Junction','Arni Road' , 'Jalna ','Arvi', 'Jalsu','Asangaon', 'Jam Wanthali', 'Aurangabad', 'Jarandeshwar', 'Babupeth', 'Jargaon', 'Badlapur', 'Jath Road', 'Badnera Junction', 'Jaulka', 'Balharshah', 'Javale', 'Bamhani', 'Jayasingpur', 'Bandra Terminus', 'Jejuri', 'Banwali', 'Jenal', 'Baramati', 'Jeur', 'Barejadi', 'Jigna', 'Barsi Takli', 'Kalyan', 'Barsi Town', 'Kamshet', 'Basmat', 'Karad', 'Bauria Junction', 'Karanja', 'Belapur', 'Karjat', 'Belvandi', 'Katol', 'Betavad', 'Khadki', 'Bhandak', 'Khamgaon', 'Bhandara Road', 'Khamkhed',
'Bharatwada', 'Khandala', 'Bhusaval', 'Khed', 'Bhavani Nagar', 'Khopoli', 'Bhigwan', 'Kinwat', 'Bhilavdi', 'Kirloskarvadi', 'Bhiwandi Road', 'Kolhapur', 'Biswa Bridge', 'Kopargaon', 'Bodwad', 'Kudal', 'Boisar', 'Kumgaon Burti', 'Bolda', 'Kuram', 'Bombay Masjid', 'Kurduvadi', 'Bordi', 'Kurla Junction', 'Borivali', 'Landaura', 'Borvihir', 'Lasalgaon', 'C Shahumaharaj T', 'Lasur', 'Chakraj Mal', 'Latur', 'Chalisgaon Junction', 'Latur Road', 'Chanda Fort', 'Laul', 'Chandrapur', 'Lokmanya Tilak Terminus', 'Chandur', 'Lonand',
'Chandrapur', 'Lokmanya Tilak Terminus', 'Chandur', 'Lonand', 'Chaube', 'Lonavala', 'Chhandrauli', 'Loni', 'Chikalthan', 'Madha', 'Chikni Road', 'Maheji', 'Chinchli', 'Malavli', 'Chinchpada', 'Malkapur', 'Chinchvad', 'Malwan', 'Chiplun', 'Mandar Hill', 'Chitali', 'Mangaon', 'Chondi', 'Mangra', 'Dadar (Western)', 'Manmad Junction', 'Dadar (Central)', 'Manwath Road', 'Dahanu Road', 'Marauda', 'Dalelnagar', 'Maval', 'Dapodi', 'Mhasavad', 'Daund Junction', 'Miraj Junction', 'Dehu Road', 'Mitha', 'Devlali', 'Modnimb',
'Dewalgaon', 'Mohol' , 'Dhalgaon', 'Mudkhed Junction', 'Dhamangaon', 'Muli Road', 'Dhamni', 'Mumbai Central', 'Dhamora', 'Mumbai', 'Dhanakwada', 'Mundhewadi', 'Dhanawala Wada', 'Murtajapur', 'Dharangaon', 'Nagbhir Junction', 'Dharmabad', 'Nagpur', 'Dhoda Khedi', 'Nanded', 'Dhule', 'Nandgaon', 'Galan', 'Nandura', 'Gangakher', 'Nandurbar', 'Gevrai', 'Nardana', 'Gholvad', 'Nari Road', 'Ghorawadi', 'Narkher', 'Ghorpuri', 'Nasik Road', 'Ghugus', 'Naydongri', 'Gondia Junction', 'Nenpur', 'Goregaon Road', 'Neral',
'Gotegaon', 'Govindnagar', 'Hadapsar', 'Niphad', 'Nira', 'Nivasar', 'Nizampur', 'Pachora Junction', 'Padhegaon', 'Paldhi', 'Palghar', 'Pandharpur', 'Panvel', 'Paradgaon', 'Parasnath', 'Parbhani Junction', 'Pardi', 'Parli Vaijnath', 'Partur', 'Patas','Neri', 'Nimbhora', 'Nipani Vadgaon', 'Vaitarna', 'Valivade', 'Vambori', 'Vangaon', 'Varangaon', 'Vasai Road', 'Veer', 'Vilad', 'Vilavade', 'Virar', 'Visapur', 'Wadoda', 'Wan Road', 'Wardha East', 'Wardha Junction', 'Warora', 'Washim',
'Gotegaon', 'Govindnagar', 'Hadapsar', 'Niphad', 'Nira', 'Nivasar', 'Nizampur', 'Pachora Junction', 'Padhegaon', 'Paldhi', 'Palghar', 'Pandharpur', 'Panvel', 'Paradgaon', 'Parasnath', 'Parbhani Junction', 'Pardi', 'Parli Vaijnath', 'Partur', 'Patas','Neri', 'Nimbhora', 'Nipani Vadgaon', 'Vaitarna', 'Valivade', 'Vambori', 'Vangaon', 'Varangaon', 'Vasai Road', 'Veer', 'Vilad', 'Vilavade', 'Virar', 'Visapur', 'Wadoda', 'Wan Road', 'Wardha East', 'Wardha Junction', 'Warora', 'Washim',
 'Raver', 'Ridhore', 'Roha', 'Rohini', 'Rotegaon', 'Rukadi', 'S Narayan CHPLA', 'Sakhoti Tanda', 'Salekasa', 'Saneh Road', 'Sanganapur', 'Sangli', 'Sangameshwar', 'Sangola', 'Sangrampur', 'Sanvrad', 'Saphale', 'Sarola', 'Satara', 'Satuna','Solapur Junction', 'Sonegaon', 'Tadali', 'Tadwal', 'Takal', 'Takari', 'Takarkhede', 'Talavli', 'Talegaon', 'Tarak Nagar', 'Targaon', 'Thane', 'Tikekarwadi', 'Tilak Bridge', 'Tirora', 'Tivari', 'Tumsar Road', 'Udgir', 'Ukshi', 'Umed','Selu',
 'Savarda', 'Umri', 'Savda', 'Uruli Kanchan', 'Sawantwadi Road', 'Vadgaon','Hazur Sahib Nanded',
];

const resultBox = document.querySelector(".result-boxTrain"); 
const inputBox = document.getElementById("station_name");

inputBox.onkeyup = function() {
    let result = [];
    let input = inputBox.value;
    if (input.length) {
        result = availableKeywords.filter((keyword) => {
            return keyword.toLowerCase().includes(input.toLowerCase());
        });
        console.log(result);
    }
    display(result);
    if(!result.length){
        resultBox.innerHTML = '';
    }
}

function display(result) {
    const content = result.map((list) => {
        return "<li onclick='selectInput(this)'>" + list + "</li>"; 
    });
    resultBox.innerHTML = "<ul>" + content.join('') + "</ul>";
}

function selectInput(item) { 
    inputBox.value = item.innerHTML; 
    resultBox.innerHTML = ''; 
}