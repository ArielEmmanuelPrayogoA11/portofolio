@extends('layouts.app')

<style>
    .homepage-bg {
        background-image:
            linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),

            url('{{ asset('assets/homepage.png') }}');

        background-size: cover;
        background-position: center;
        height: 900px;

    }

    .undead-bg {
        background-image:
            linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
            url('{{ asset('assets/undead.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: auto;

    }

    @keyframes wavy {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .wavy-animation {
        animation: wavy 2s infinite;
    }

    .ayam {
        border: 2px solid black;
        /* Memberikan border putih */
        border-radius: 10px;
        /* Memberikan radius sudut */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.6);
        /* Menambahkan shadow */
        padding: 24px;
        /* Memberikan ruang di sekitar teks */
        color: white;
        /* Mengatur warna teks menjadi putih */
    }
</style>

@section('content')
    <div class="container-fluid homepage-bg ">
        <div class="row">
            <div class="paddingbanyak paddingbanyakbawah">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="textbesar py-3 pb-4">HEY!</h1>
                        <p>Hey everyone! It's your AQW Content Creator here, ready to bring you the latest combos, guides,
                            and important patch notices. While I may not flood your feed with uploads, I assure you that
                            each video I create is packed with valuable information and strategies to enhance your AQW
                            experience. From mastering powerful combos to staying ahead with timely patch updates, I've got
                            you covered. So, buckle up, because together, we're going to conquer AQW like never before</p>
                        <div class="card-body pt-4 ">
                            <a href="https://www.youtube.com/playlist?list=PLtyLTHqkTROROSnZhmHpWc91OO2gxNsqn"
                                class="btn btn-mainpage py-3" id="explore-btn"><strong>Explore
                                    Now</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-4"></div>



    <div class="container pt-3">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/peasant.png" class="img-fluid" alt="Peasant Image">
            </div>

            <div class="col-md-6 ">
                <div class="text-container bg-dark ayam">
                    <h2><strong>Jinz the Peasant</strong></h2>
                    <h5 class="text-danger">Daily Worker</h5>
                    <hr>
                    <p>Whatsup Mate! Thanks for visiting this website, i know it looks so messy but i am trying my best to
                        improve it! i learn website development all by myself and i tried my best not to mess it up! sorry
                        for
                        the uncomfy vibes T_T.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-4"></div>
    <div class="container-fluid  ">
        <div class="text-center">
            <div class="p-1"></div>
        </div>
    </div>
    <section class="dark">
        <div class="container py-4">
            <h1 class="h1 text-center text-white" id="pageHeaderTitle">Recent Videos</h1>
            {{-- FOREACHH --}}
            <article class="postcard dark blue">
                <a class="postcard__img_link" href="https://www.youtube.com/watch?v=wFOSY_T1G9o">
                    <img class="postcard__img" src="https://i.ytimg.com/vi/wFOSY_T1G9o/maxresdefault.jpg"
                        alt="Video Thumbnail" style="object-fit: cover;" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title blue"><a href="https://www.youtube.com/watch?v=wFOSY_T1G9o">QUANTUM
                            CHRONOMANCER GUIDE</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                        </time>
                    </div>
                    <div class="postcard__bar bg-danger"></div>
                    <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                        fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus
                        nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam
                        adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi,
                        illum quos!</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Video</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                        <li class="tag__item play blue">
                            <a href="https://www.youtube.com/watch?v=wFOSY_T1G9o"><i class="fas fa-play mr-2"></i>Watch
                                Video</a>
                        </li>
                    </ul>
                </div>
            </article>

            {{-- ENDFOREACHH --}}
            <article class="postcard dark blue">
                <a class="postcard__img_link" href="https://www.youtube.com/watch?v=wFOSY_T1G9o">
                    <img class="postcard__img" src="https://i.ytimg.com/vi/wFOSY_T1G9o/maxresdefault.jpg"
                        alt="Video Thumbnail" style="object-fit: cover;" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title blue"><a href="https://www.youtube.com/watch?v=wFOSY_T1G9o">QUANTUM
                            CHRONOMANCER GUIDE</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                        </time>
                    </div>
                    <div class="postcard__bar bg-danger"></div>
                    <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                        fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus
                        nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam
                        adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi,
                        illum quos!</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Video</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                        <li class="tag__item play blue">
                            <a href="https://www.youtube.com/watch?v=wFOSY_T1G9o"><i class="fas fa-play mr-2"></i>Watch
                                Video</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="postcard dark blue">
                <a class="postcard__img_link" href="https://www.youtube.com/watch?v=wFOSY_T1G9o">
                    <img class="postcard__img" src="https://i.ytimg.com/vi/wFOSY_T1G9o/maxresdefault.jpg"
                        alt="Video Thumbnail" style="object-fit: cover;" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title blue"><a href="https://www.youtube.com/watch?v=wFOSY_T1G9o">QUANTUM
                            CHRONOMANCER GUIDE</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                        </time>
                    </div>
                    <div class="postcard__bar bg-danger"></div>
                    <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                        fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus
                        nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam
                        adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi,
                        illum quos!</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Video</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                        <li class="tag__item play blue">
                            <a href="https://www.youtube.com/watch?v=wFOSY_T1G9o"><i class="fas fa-play mr-2"></i>Watch
                                Video</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="postcard dark blue">
                <a class="postcard__img_link" href="https://www.youtube.com/watch?v=wFOSY_T1G9o">
                    <img class="postcard__img" src="https://i.ytimg.com/vi/wFOSY_T1G9o/maxresdefault.jpg"
                        alt="Video Thumbnail" style="object-fit: cover;" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title blue"><a href="https://www.youtube.com/watch?v=wFOSY_T1G9o">QUANTUM
                            CHRONOMANCER GUIDE</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                        </time>
                    </div>
                    <div class="postcard__bar bg-danger"></div>
                    <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                        fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus
                        nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam
                        adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi,
                        illum quos!</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Video</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                        <li class="tag__item play blue">
                            <a href="https://www.youtube.com/watch?v=wFOSY_T1G9o"><i class="fas fa-play mr-2"></i>Watch
                                Video</a>
                        </li>
                    </ul>
                </div>
            </article>



        </div>
    </section>


    <div class="pb-4"></div>



    <div class="container pt-3">
        <div class="row ">
            <div class="col-md-6 me-6">
                <div class="text-container bg-dark ayam">
                    <h2><strong>Parthur the Archmage</strong></h2>
                    <h5 class="text-danger">Archmage Guidance</h5>
                    <hr>
                    <p>Phedra really loves doing the Content creating stuff but he is lack of donation to lift his spirit
                        up!
                        Here are some links so you can support Phedra!</p>

                    <div class="d-flex flex-column">
                        <a href="https://trakteer.id/" class="btn btn-mainpage btn-block" target="_blank">Support on
                            Trakteer</a>
                        <a href="https://www.buymeacoffee.com/" class="btn btn-mainpage btn-block mt-2"
                            target="_blank">Buy
                            Me a
                            Coffee</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <img src="assets/am.png" class="img-fluid mirror" alt="Peasant Image">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container pt-5">
            <div class="row ">
                <div class="col-md-6 mb-4">
                    <img src="assets/dot.png" class="img-fluid" alt="Peasant Image">
                </div>
                <div class="col-md-6 me-6">
                    <div class="text-container bg-dark ayam">
                        <h2><strong>Masao the Dragon of Time</strong></h2>
                        <h5 class="text-danger">Dragon of Time Guidance</h5>
                        <hr>
                        <p>*dragon breath* Rawr! The gameplay in AQW is centered around completing quests, which range from
                            slaying fearsome beasts to solving intricate puzzles and unraveling mysteries. These quests not
                            only drive the overarching narrative of the game but also offer valuable rewards such as
                            experience points, gold, and rare items. Additionally, AQW features a robust combat system that
                            emphasizes strategy and teamwork, with players able to join forces to take down powerful bosses
                            and conquer challenging dungeons. One of the hallmarks of AQW is its dynamic and ever-expanding
                            world, with regular updates introducing fresh content, events, and storylines to keep players
                            engaged. Whether it's a seasonal event celebrating holidays like Halloween or a major expansion
                            introducing new regions and challenges, there's always something new to discover in AQW. Beyond
                            its gameplay mechanics, AQW is also known for its vibrant community, with players from around
                            the world coming together to chat, trade, and form guilds. Whether forging lasting friendships
                            or engaging in friendly competition, the social aspect of AQW adds an extra layer of depth to
                            the overall experience. In summary, AdventureQuest Worlds is more than just a game; it's an
                            immersive journey into a fantastical realm filled with adventure, camaraderie, and endless
                            possibilities. With its accessible gameplay, deep customization options, and vibrant community,
                            AQW continues to captivate players of all ages and backgrounds, inviting them to embark on an
                            epic quest like no other.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="pb-4"></div>


    <div class="container-fluid  ">
        <div class="text-center">
            <div class="p-1"></div>
        </div>
    </div>
    <div class="container-fluid undead-bg ">
        <div class="row">
            <div class="paddingbanyak paddingbanyakbawah">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="textbesar py-3 pb-4">AQW</h1>
                        <p>AdventureQuest Worlds (AQW) is a vibrant and immersive massively multiplayer online role-playing
                            game (MMORPG) developed by Artix Entertainment, renowned for its engaging gameplay and dynamic
                            community. Set in a fantastical realm teeming with magic, monsters, and heroes, AQW invites
                            players to embark on epic quests, forge alliances, and battle formidable adversaries in a
                            constantly evolving world.

                            One of the defining features of AQW is its accessibility, as it is a browser-based game. This
                            means that players can dive into the action without the need for cumbersome downloads or
                            installations, making it easy for anyone with an internet connection to join the adventure.
                            Whether exploring lush forests, treacherous dungeons, or bustling towns, players have the
                            freedom to roam and interact with a diverse array of environments and characters.

                            At the heart of AQW lies character customization, allowing players to create their own unique
                            avatars from a wide selection of classes, races, and appearances. From mighty warriors wielding
                            massive swords to nimble rogues skilled in stealth and subterfuge, there's a class to suit every
                            playstyle and preference. As players progress through the game, they can acquire new gear,
                            weapons, and abilities to further customize their characters and enhance their power.

                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        const exploreBtn = document.getElementById('explore-btn');

        exploreBtn.addEventListener('mouseenter', function() {
            // Add the wavy animation class
            this.classList.add('wavy-animation');
            // Change text color
            this.style.color = '#fff'; // Change to desired text color
            // Change background color
            this.style.backgroundColor = '#000'; // Change to desired background color
        });

        exploreBtn.addEventListener('mouseleave', function() {
            // Remove the wavy animation class
            this.classList.remove('wavy-animation');
            // Reset text color
            this.style.color = '#000'; // Change to default text color
            // Reset background color
            this.style.backgroundColor = '#fff'; // Change to default background color
        });
    </script>
@endsection
