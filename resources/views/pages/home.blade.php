@extends('welcome')

@section('contain')
<div class="container-fluid text-center"><h1>Home</h1></div>
<hr>
<div class="container textarea">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
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
           
            <button type="button" class="btn btn-dark text-light mt-2 mb-2"> <a href="/skills" target="_blank">My Skills</a></button>
        </div>
        <div class="col-2"></div>
    </div>
   
</div>
{{-- <img src="{{ asset('assets/images/mypic1.png') }}" alt="Girl in a jacket" width="500" height="600">
    
    <p>What is Lorem Ipsum?
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        
        Why do we use it?
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        
        
        Where does it come from?
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
        
        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
    </p>
     --}}
@endsection