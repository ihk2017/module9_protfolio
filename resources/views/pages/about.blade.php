@extends('welcome')

@section('contain')
<div class="container-fluid text-center"><h1>About Me</h1></div>
<hr>
<div class="containter">

    <div class="row ">
        <div class="col-1"></div>
        <div class="col-5 mt-5 text-center ">
            <h1>IMAM HASAN KAZI</h1>
            <h4>Senior Programmer</h4>
            <h6>Standard Group Limited</h6>
            <h6>Contact : +880-1643601697</h6>
            <h6>Email : hasan.idb7@gmail.com</h6>
        </div>
        <div class="col-5 text-center">
            <img src="{{ asset('assets/images/mypic3b.png') }}" alt="Girl in a jacket" width="300" height="300">
        </div>
        <div class="col-1"></div>
    </div>
    <hr>
    <div class="aboutme">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <h4>About Me</h4>
                <p >
                    As a web application developer, my primary focus is on creating dynamic and user-friendly applications that operate seamlessly on the internet. I specialize in utilizing various programming languages such as <strong> HTML, CSS, JavaScript, and frameworks like React, Angular, or Vue.js </strong>to build responsive and interactive web experiences.
                    </br>
                    My responsibilities often involve collaborating with a team to design, develop, and deploy web applications that meet clients' or users' needs. This includes understanding <strong>requirements, architecting the application structure, implementing functionality, conducting tests for quality assurance, and ensuring the application's performance, security, and scalability.</strong>
                    </br>
                    I keep myself updated with the latest web development trends, tools, and best practices to deliver high-quality, efficient, and innovative solutions. Moreover, <strong>I emphasize creating intuitive user interfaces and experiences to enhance usability and engagement.</strong>
                    </br>
                    In addition to technical skills, effective communication, problem-solving, and adaptability are crucial in my role as they enable me to comprehend complex issues, work through challenges, and collaborate effectively with cross-functional teams to achieve project objectives.
                    </br>
                    <strong>Overall, my goal as a web application developer is to craft robust, efficient, and visually appealing applications that elevate user experiences and contribute positively to the digital landscape.</strong>
                </p>
            </div>
            <div class="col-1"></div>
        </div>     
    </div>
    <hr>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="skills">
                <h3 class="mt-3">My Skills</h3>
                <div class="card h-100 shadow">
                    <div class="card-head"> <h6>Design Skills</h6> </div>
                    <div class="card-body textarea">
                        <p>
                            I have a keen eye for design principles, including layout, color theory, typography, and user interface (UI) design. I create wireframes, mockups, and prototypes using design tools like Adobe XD, Sketch, or Figma, focusing on user-centric design to ensure intuitive and engaging interfaces.
                        </p>
                    </div>
                </div>
                <div class="card h-100 shadow">
                    <div class="card-head"> <h4>Front-end Development</h4> </div>
                    <div class="card-body textarea">
                        <p>
                            Proficient in front-end technologies such as HTML, CSS, and JavaScript, they bring designs to life by coding responsive and interactive user interfaces. I utilize frameworks/libraries like React, Angular, or Vue.js to enhance efficiency and user experience.
                        </p>
                    </div>
                </div>
                <div class="card h-100 shadow">
                    <div class="card-head"> <h4>Back-end Development</h4> </div>
                    <div class="card-body textarea">
                        <p>
                            Knowledgeable about back-end technologies and databases (e.g., Node.js, Python, PHP, SQL, NoSQL) to develop server-side logic, manage databases, and ensure data security for the web applications
                        </p>
                    </div>
                </div>
                <div class="card h-100 shadow">
                    <div class="card-head"> <h4>Full-Stack Capabilities</h4> </div>
                    <div class="card-body textarea">
                        <p>
                            I posse full-stack skills, allowing them to work on both front-end and back-end aspects of web application development, enabling a more comprehensive understanding of the entire development process.
                        </p>
                    </div>
                </div>
                <div class="card h-100 shadow">
                    <div class="card-head"> <h4>Usability and Accessibilit</h4> </div>
                    <div class="card-body textarea">
                        <p>
                            I prioritize usability and accessibility standards, ensuring that web applications are easy to navigate, inclusive, and compliant with accessibility guidelines (such as WCAG) to accommodate users with disabilities.
                        </p>
                    </div>
                </div>
                <div class="card h-100 shadow">
                    <div class="card-head"> <h4>Testing and Debugging</h4> </div>
                    <div class="card-body textarea">
                        <p>
                            I use proficient in testing methodologies and debugging techniques to identify and resolve issues, ensuring the web application functions seamlessly across various browsers and devices.
                        </p>
                    </div>
                </div>
                <div class="card h-100 shadow">
                    <div class="card-head"> <h4>Collaboration and Communication</h4> </div>
                    <div class="card-body textarea">
                        <p>
                            Effective communication skills are crucial. I collaborate with cross-functional teams, including designers, developers, project managers, and clients, to understand requirements, provide updates, and ensure the project's success.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>

    <hr>

    <div class="container">
        <div class="row mt-3 mb-5">
           
            <div class="col-4">
                <div class="card h-100">
                    <div class="card-head bg-primary text-light"> <h4 class="text-center">Education</h4></div>
                    <div class="card-body bg-info">
                        <h6>Post Graduation from Shanta-Marium University of Creative Technology</h6>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card h-100">
                    <div class="card-head bg-primary text-light"> <h4 class="text-center">Experience</h4></div>
                    <div class="card-body text-center bg-info ">
                        <h3>13 Years</h3>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card h-100">
                    <div class="card-head bg-primary text-light "> <h4 class="text-center">Certifications</h4></div>
                    <div class="card-body text-center bg-info ">
                        <h6>
                            <li>Orace Certified Professional</li>
                            <li>Graphics & Design (AI)</li>
                            <li>Web Design & Development</li>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection