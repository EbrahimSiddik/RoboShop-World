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
            <h1>Competetions</h1>
            <p style="font-size: 24px; font-weight: 550; color: rgb(56, 38, 38);">Get Knowledge of Different Projects</p>
        </section>


        
    <!-- Competetions -->
    <section id="blogs">
        @foreach ($competetions as $competetion)
            <div class="blog-box">
                <div class="blog-img">
                    <img src="{{asset('asset/competetions')}}/{{$competetion->image}}" alt="">
                </div>
                <div class="blog-details">
                    <h4>{{$competetion->title}}</h4>
                    <p>{{$competetion->short_description}}</p>
                    <a href="{{route('competetion.details', ['slug'=>$competetion->slug])}}">READ MORE</a>
                </div>
            </div>
        @endforeach
        {{-- {{$competetions->links()}} --}}
    



     
        <!-- Example Competition 1 -->
        <div class="blog-box">
            <div class="blog-img">
                <img src='asset\competetions\comp1.jpeg'alt="Coding Challange" >
            </div>
            </br>
            <div class="blog-details">
            <h2>National Science Fair 2024</h2>
            <p>Join the National Science Fair 2024 to showcase your innovative projects </br>And compete with the brightest minds from across the country.</p>
            <a href="https://www.sciencefair.omeiat.in/">READ MORE</a> 
            </div>
        </div>
        </br></br>
        




        <!-- Example Competition 2 -->
        <div class="blog-box">
            <div class="blog-img">
                <img src='asset\competetions\comp2.png'alt="Coding Challange" >
            </div>
            </br>
            <div class="blog-details">
                <h2>International Coding Challenge</h2>
                <p>Participate in the International Coding Challenge </br>And solve complex problems to win exciting prizes and global recognition.</p>
                <a href="https://icpc.global/">READ MORE</a>
            </div>
        </div>
        </br></br>
    
   


</section>

</div>
