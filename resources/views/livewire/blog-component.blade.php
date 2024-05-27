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
            background-image: url({{asset('asset/porduct-page-banner.png')}});
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
            <h1>Blogs</h1>
            <p style="font-size: 24px; font-weight: 550; color: rgb(56, 38, 38);">Latest Blogs</p>
        </section>

    <!-- Blogs -->
    <section id="blogs">            
        @foreach ($blogs as $blog)
            <div class="blog-box">
                <div class="blog-img">
                    <img src="{{asset('asset/blogs')}}/{{$blog->image}}" alt="">
                </div>
                <div class="blog-details">
                    <h4>{{$blog->title}}</h4>
                    <p>{{$blog->short_description}}</p>
                    <a href="{{route('blog.details', ['slug'=>$blog->slug])}}">READ MORE</a>
                </div>
            </div>
        @endforeach


    


     <!-- Example Blog 1: Arduino -->
    
     <div class="blog-box">
            <div class="blog-img">
                <img src="asset\blogs\blog1.png" alt="Arduino">
            </div>
            </br>
            <div class="blog-details">
                <h2>Getting Started with Arduino</h2>
                <p>Learn the basics of Arduino, a popular open-source platform for building electronics projects.</p>
                <a href="https://www.arduino.cc/">READ MORE</a>
            </div>
        </div>

    </br>
    </br>

        <!-- Example Blog 2: Raspberry Pi -->
        <div class="blog-box">
            <div class="blog-img">
                <img src="asset\blogs\blog2.png" alt="Raspberry Pi">
            </div>
            </br>
            <div class="blog-details">
                <h2>Exploring the Raspberry Pi</h2>
                <p>Discover the versatility of the Raspberry Pi, a small and affordable computer for DIY projects.</p>
                <a href="https://www.raspberrypi.com/">READ MORE</a>
            </div>
        </div>

        </br></br>
        </section>

</div>
