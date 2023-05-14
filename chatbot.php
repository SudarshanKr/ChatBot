<?php

$faq = array(
    "What is the application form deadline for Exam 1?" => "The application form deadline for Exam 1 is June 30th.",
    "What is the application form deadline for Exam 2?" => "The application form deadline for Exam 2 is July 15th.",
    "What is the application form deadline for Exam 3?" => "The application form deadline for Exam 3 is August 31st.",
    "What is the application form deadline for Exam 4?" => "The application form deadline for Exam 4 is September 15th.",
    "What are the different courses offered by sciastra.com?" => "We offer a wide range of courses in different fields including computer science, engineering, business, and more. You can explore our website to learn more about the specific courses we offer.",
    "How do I apply for a course at sciastra.com?" => "To apply for a course at sciastra.com, you can visit our website and fill out the online application form. Make sure to submit all the required documents and information.",
    "What is the tuition fee for a course at sciastra.com?" => "The tuition fee for each course varies depending on the program and duration. You can find detailed information about the tuition fee on our website.",
    "What is the duration of a course at sciastra.com?" => "The duration of each course varies depending on the program and level. You can find detailed information about the duration of each course on our website.",
    "What are the admission requirements for a course at sciastra.com?" => "The admission requirements for each course varies depending on the program and level. You can find detailed information about the admission requirements on our website.",
    "What is the application process for a course at sciastra.com?" => "The application process for each course varies depending on the program and level. You can find detailed information about the application process on our website.",
    "What is the application form deadline for a course at sciastra.com?" => "The application form deadline for each course varies depending on the program and level. You can find detailed information about the application form deadline on our website.",
    "What is the application fee for a course at sciastra.com?" => "The application fee for each course varies depending on the program and level. You can find detailed information about the application fee on our website.",
    "What is the admission process for a course at sciastra.com?" => "The admission process for each course varies depending on the program and level. You can find detailed information about the admission process on our website.",
    "What is the admission fee for a course at sciastra.com?" => "The admission fee for each course varies depending on the program and level. You can find detailed information about the admission fee on our website.",
    "What is the eligibility criteria for a course at sciastra.com?" => "The eligibility criteria for each course varies depending on the program and level. You can find detailed information about the eligibility criteria on our website.",
	
);
$greetings = array(
    "Hi! How can I assist you today?",
    "Hello! What can I help you with?",
    "Greetings! What brings you here today?",
    "Hi there! What do you need help with?",
);
$pages = array(
    'home' => 'https://www.sciastra.com/',
    'courses' => 'https://www.sciastra.com/courses/',
    'faculty' => 'https://www.sciastra.com/faculty/',
    'contact' => 'https://www.sciastra.com/contact/',
    'about' => 'https://www.sciastra.com/about/'
  );
$random_greeting = array_rand($greetings);

if(isset($_POST['message'])) {
    $message = $_POST['message'];
    if(array_key_exists($message, $faq)) {
        echo $faq[$message];
    } 
    else if (strpos($message, 'navigate') !== false) {
        echo 'Here are the pages you can navigate to:';
        foreach ($pages as $key => $value) {
           echo "<a href='.$value.'>$key</a>";
        }
      } 
    else {
         $responses = array(
            "I'm sorry, I didn't understand. Can you please rephrase your question?",
            "I'm not sure I know the answer to that. Can you please provide more details?",
            "That's an interesting question. Let me look that up for you.",
            "That's an interesting question. Let me look that up for you.",
        );
        $random_response = array_rand($greetings);
        echo $greetings[$random_response];
    }
} else {
    echo $responses[$random_greeting];
}

?>
