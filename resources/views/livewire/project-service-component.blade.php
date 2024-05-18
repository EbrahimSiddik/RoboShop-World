<div>
    <style>
        #blogs{
        padding: 70px 100px 0 100px;
        }

        #blogs .blog-box {
            display: flex;
            align-items: center;
            width: 100%;
            margin-bottom: 70px;
        }

        #blogs .blog-img {
            width: 60%;
            margin-right: 50px;
        }

        #blogs .blog-img img{
            width: 600px;
        }

        #blogs .blog-details {
            width: 50%;
            text-align: justify;
        }

        #blogs .blog-details h4{
            color: #555555;
            text-align: justify;
            font-weight: bold; 
        }

        #blogs .blog-details p{
            color: #555555;
            text-align: justify;
            padding: 0 0 10px 0;
        }

        #blogs .blog-details a{
            text-decoration: none;
            font-size: 13px;
            background-color: #325079;
            color: white;
            padding: 10px;
            border-radius: 6px;
        }

        #blogs .blog-details a:hover {
            background-color: #041e42;
        }

        #page-header {
            background-image: url({{asset('asset/banner/wide_banner_1.jpeg')}});
            width: 100%;
            height: 30vh;
            background-size: cover;
            display: flex;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            padding: 14px;
        }

        #page-header h1{
			font-weight: bold;
			font-size: 48px;
            color: rgb(50, 49, 49);
		}

    </style>
    
        <section id="page-header">
            <h1>Project Service</h1>
            <p style="font-size: 24px; font-weight: 550; color: rgb(56, 38, 38);">Latest projects</p>
        </section>


    
	







   <!--Projects-->
    <section id="blogs">            
        
        

		<!-- Microcontroller Projects -->
		<section class="project-section">
        <h2 text-align="center"><b>Microcontroller Projects</b></h2>
	    </br>



        <!-- Project 1 -->
        <div class="blog-box">
            <div class="blog-img">
                <img src="asset\project-service\project-service1.png" alt="Microcontroller Project 1">
            </div>
			</br>
            <div class="project-details">
			<h2>Line Following Robot</h2>
            <p>Learn how to create a line following robot using basic electronics and programming skills.</p>  
			 <a href="https://github.com/">READ MORE</a>
            </div>
        </div>
		


        <!-- Project 2 -->
        <div class="blog-box">
            <div class="blog-img">
                <img src="asset\project-service\project-service3.png" alt="Microcontroller Project 2">
            </div>
			</br>
            <div class="project-details">
			<h2>Solar Panel System</h2>
            <p>Build a solar panel system to harness the power of the sun and generate renewable energy.</p>
            <a href="https://github.com/">READ MORE</a>
            </div>
        </div>
		</br></br></br>
        
       </section>

    <!-- Science Projects -->
    <section class="project-section">
    <h2 text-align="center"><b>Science Projects</b></h2>
    </br>

        <!-- Project 1 -->
        <div class="blog-box">
            <div class="blog-img">
                <img src="asset\science-project-courses\course2.png" alt="Science Project 1">
            </div>
			</br>
            <div class="project-details">
			<h2>Smart Blind Stick</h2>
            <p>Create a smart blind stick that uses sensors to help visually impaired individuals navigate their environment safely.</p>   
		    <a href="https://github.com/">READ MORE</a>
            </div>
        </div>
		</br></br>


        <!-- Project 2 -->
        <div class="blog-box">
            <div class="blog-img">
                <img src="asset\science-project-courses\course3.png" alt="Science Project 2">
            </div>
			</br>
            <div class="project-details">
			<h2>Home Security System</h2>
            <p>Develop a home security system that can detect intruders and alert the homeowner through a mobile app.</p>     
		    <a href="https://github.com/">READ MORE</a>
            </div>
        </div>
		</br></br></br>
    </section>
        
    </section>
</div>









