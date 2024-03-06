<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Client') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12 flex"> --}}

                <section class="container mx-auto px-8 py-8 lg:py-40">
                    <h2 class="block antialiased tracking-normal font-sans text-4xl font-semibold leading-[1.3] text-blue-gray-900 !text-3xl !leading-snug lg:!text-4xl">Bienvenue sur Le Digital Master !</h2>
                    <p class="block antialiased font-sans text-xl font-normal leading-relaxed text-inherit mt-2 w-full font-normal !text-gray-500 lg:w-5/12">Bienvenue sur votre tableau de bord personnalisé ! Chez Le Digital Master, nous sommes ravis de vous accueillir dans notre communauté. Vous êtes maintenant prêt à explorer toutes les fonctionnalités et services que nous offrons pour vous aider à créer et à gérer vos sites web de manière efficace.</p>
                    <span target="_blank">Découvrez, <b>ce que vous pouvez faire</b></span>.
                    <div class="mt-10 grid grid-cols-1 gap-10 lg:grid-cols-3">

                      <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="{{ asset('assets/images/picture11.jpg') }}" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
                        <div class="absolute inset-0 bg-black/70"></div>
                        <div class="p-6 relative flex flex-col justify-end">
                          <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Pack 1</h4>
                        <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">
                            Un page d'acceuil + <br>
                            1 à 4 pages catégories
                        </p>
                        <a href="{{ route('pack1') }}" class="bg-primary py-2 my-3 px-4 rounded-md transition-colors duration-300">
                            <p class="text-white text-center">Prendre le pack</p>
                        </a>
                        </div>
                      </div>
                      <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="{{ asset('assets/images/picture13.jpg') }}" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
                        <div class="absolute inset-0 bg-black/70"></div>
                        <div class="p-6 relative flex flex-col justify-end">
                          <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Pack 2</h4>
                          <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">
                            Une page d'acceuil + <br>
                            1 à 4 pages catégories +<br>
                            Page complément + <br>
                            Une barre de recherche <br>
                          </p>
                          <a href="{{ route('pack2') }}" class="bg-primary py-2 my-3 px-4 rounded-md transition-colors duration-300">
                            <p class="text-white text-center">Prendre le pack</p>
                        </a>
                        </div>
                      </div>
                      <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="{{ asset('assets/images/picture14.jpg') }}" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
                        <div class="absolute inset-0 bg-black/70"></div>
                        <div class="p-6 relative flex flex-col justify-end">
                          <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Pack 3</h4>
                          <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">
                            Une page d'acceuil + <br>
                            4 à 6 pages catégories + <br>
                            Page complément  + <br>
                            Une barre de recherche  <br>
                          </p>
                          <a href="{{ route('pack3') }}" class="bg-primary py-2 my-3 px-4 rounded-md transition-colors duration-300">
                            <p class="text-white text-center">Prendre le pack</p>
                        </a>
                        </div>
                      </div>
                      <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="{{ asset('assets/images/picture15.jpg') }}" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
                        <div class="absolute inset-0 bg-black/70"></div>
                        <div class="p-6 relative flex flex-col justify-end">
                          <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Pack 4</h4>
                          <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">
                            Pack 3 + <br>
                            Option de commande  <br>
                          </p>
                          <a href="{{ route('pack4') }}" class="bg-primary py-2 my-3 px-4 rounded-md transition-colors duration-300">
                            <p class="text-white text-center">Prendre le pack</p>
                        </a>
                        </div>
                      </div>
                      <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="{{ asset('assets/images/picture16.jpg') }}" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
                        <div class="absolute inset-0 bg-black/70"></div>
                        <div class="p-6 relative flex flex-col justify-end">
                          <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Pack 5</h4>
                          <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">
                            Page d'acceuil <br>
                            Barre de recherche + <br>
                            6 à 10 pages catégories + <br>
                            Option de commande
                          </p>
                          <a href="{{ route('pack5') }}" class="bg-primary py-2 my-3 px-4 rounded-md transition-colors duration-300">
                            <p class="text-white text-center">New Project</p>
                        </a>
                        </div>
                      </div>
                      <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="{{ asset('assets/images/picture10.jpg') }}" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
                        <div class="absolute inset-0 bg-black/70"></div>
                        <div class="p-6 relative flex flex-col justify-end">
                          <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Pack 5</h4>
                          <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">
                            Site E-commerce + <br>
                            Option de commande + <br>
                            Option de payement <br>
                          </p>
                          <a href="{{ route('pack6') }}" class="bg-primary py-2 my-3 px-4 rounded-md transition-colors duration-300">
                            <p class="text-white text-center">New Project</p>
                        </a>
                        </div>
                      </div>
                    </div>
                </section>
                        {{-- Part 1 --}}


        <div x-data="{ open: false }" class="grid place-items-center mb-4"b>
            <button @click="open = !open" class="bg-gray-500 text-white px-4 py-2 rounded">Toggle Collapse</button>
            <div x-show="open" class="overflow-hidden transition-all duration-500">
                <div id="" class="bg-secondary p-4 mt-5 rounded-4 h-500 mb-5" style="margin-inline: auto; h">
                    <form action="{{ route('submit_avis') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label text-light">Votre Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" aria-describedby="titleHelp" required>
                        </div>

                        <div class="mb-3">
                            <label for="prenom" class="form-label text-light">Votre prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="titleHelp" required>
                        </div>

                        <div class="mb-3">
                            <label for="avis_photo" class="form-label text-light">Votre photo</label>
                            <input type="file" class="form-control" id="avis_photo" name="avis_photo" aria-describedby="titleHelp" required>
                        </div>

                        <div class="mb-3">
                            <label for="commentaires" class="form-label text-light">Votre commentaire</label>
                            <textarea class="form-control" id="commentaires" name="commentaires" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning mb-3 py-3 px-4 w-100">Poster votre avis</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="bg-gradient-to-r from-white to-orange-200 flex items-center justify-center h-screen mb-5">
            <div class="w-11/12 sm:w-11/12 md:w-8/12 lg:w-6/12 backdrop-blur-sm bg-white/40 p-6 rounded-lg shadow-sm border-violet-200 border">
              <div class="w-full flex justify-between items-center p-3">
                <h2 class="text-xl font-semibold">Mes notifications</h2>
                <button id="openModalBtn" class="flex items-center bg-gradient-to-r from-orange-300 to-yellow-300 border border-yellow-600 hover:border-yellow-400 text-white font-semibold py-2 px-2 rounded-md transition-colors duration-300">
                    <p class="text-white">Envoyer une notification</p>
                </button>

            </div>
            <div class="w-full flex justify-center p-1 mb-4">
                <div class="relative w-full">
                  {{-- <input type="text" class="w-full backdrop-blur-sm bg-white/20 py-2 pl-10 pr-4 rounded-lg focus:outline-none border-2 border-gray-100 focus:border-violet-300 transition-colors duration-300" placeholder="Search..."> --}}
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  </div>
                </div>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
                <!-- Card 1 -->
                <div class="backdrop-blur-sm bg-white/20 p-6 rounded-md shadow-sm cursor-pointer border-2 border-gray-50 hover:border-violet-200 hover:border-2 transition-colors duration-300">
                  <h2 class="text-xl font-semibold mb-4">Project 1</h2>
                  <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the project.</p>
                  <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-4 xl:mt-4">

                  </div>
                </div>
                <!-- Card 2 -->
                <div class="backdrop-blur-sm bg-white/20 p-6 rounded-md shadow-sm cursor-pointer border-2 border-gray-50 hover:border-violet-200 hover:border-2 transition-colors duration-300">
                  <h2 class="text-xl font-semibold mb-4">Project 2</h2>
                  <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the project.</p>
                  <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-4 xl:mt-4">

                  </div>
                </div>
                <!-- Card 3 -->
                <div class="backdrop-blur-sm bg-white/20 p-6 rounded-md shadow-sm cursor-pointer border-2 border-gray-50 hover:border-violet-200 hover:border-2 transition-colors duration-300">
                  <h2 class="text-xl font-semibold mb-4">Project 3</h2>
                  <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the project.</p>
                  <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-4 xl:mt-4">

                  </div>
                </div>
                <!-- Card 4 -->
                <div class="backdrop-blur-sm bg-white/20 p-6 rounded-md shadow-sm cursor-pointer border-2 border-gray-50 hover:border-violet-200 hover:border-2 transition-colors duration-300">
                  <h2 class="text-xl font-semibold mb-4">Project 4</h2>
                  <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the project.</p>
                  <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-4 xl:mt-4">

                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
              <div id="myModal" class="fixed inset-0 z-10 overflow-hidden backdrop-blur-lg hidden flex items-center justify-center transition-transform duration-300">
                  <div class="modal-container p-6 backdrop-blur-sm bg-white/90 w-11/12 sm:w-11/12 md:w-8/12 lg:w-6/12 rounded-md shadow-sm">
                      <h2 class="text-2xl font-semibold mb-6">Envoyer une nouevelle notification</h2>
                      <label for="projectName" class="block text-sm font-medium text-gray-700 mb-2">Titre</label>
                      <input type="text" id="projectName" class="w-full p-2 mb-4 rounded-lg focus:outline-none border-3 border-gray-100 focus:border-orange-300 transition-colors duration-300">

                      <!-- Flex layout for lg and md screens -->
                      <div class="lg:flex">
                          <div class="lg:w-11/12 lg:pr-4">
                              <label for="projectDescription" class="block text-sm font-medium text-gray-700 mb-2">Desciption</label>
                              <input id="projectDescription" class="w-full p-4 mb-4 rounded-lg focus:outline-none border-3 border-gray-100 focus:border-orange-300 transition-colors duration-300">
                          </div>
                          {{-- <div class="lg:w-1/2">
                              <label for="inviteFriend" class="block text-sm font-medium text-gray-700 mb-2">Invite Friend</label>
                              <input type="text" id="inviteFriend" class="w-full p-2 mb-4 rounded-lg focus:outline-none border-2 border-gray-100 focus:border-violet-300 transition-colors duration-300">
                          </div> --}}
                      </div>

                      <div class="flex justify-end">
                          <button class="bg-gradient-to-r from-violet-300 to-indigo-300  border border-fuchsia-00 hover:border-violet-100 text-white font-semibold py-2 px-4 rounded-md mr-2" onclick="createProject()">Envoyer</button>
                          <button class="bg-gradient-to-r from-gray-100 to-slate-200  border border-fuchsia-00 hover:border-violet-100 text-gray-800 font-semibold py-2 px-4 rounded-md transition-colors duration-300" onclick="closeModal()">Annuler</button>
                      </div>
                  </div>
              </div>
        </div>




          {{-- Part 2 --}}


        <script>

                // Function to open the modal
                              function openModal() {
                    document.getElementById("myModal").classList.remove("hidden");
                }

                // Function to close the modal
                function closeModal() {
                    document.getElementById("myModal").classList.add("hidden");
                }

                // Function to handle project creation (you can customize this function)
                function createProject() {
                    var projectName = document.getElementById("projectName").value;
                    var projectDescription = document.getElementById("projectDescription").value;
                    var inviteFriend = document.getElementById("inviteFriend").value;

                    // Add your logic to handle the project creation here
                    console.log("Project Name: " + projectName);
                    console.log("Project Description: " + projectDescription);
                    console.log("Invite Friend: " + inviteFriend);

                    // Close the modal after handling the creation
                    closeModal();
                }

                // Event listener to open the modal when the button is clicked
                document.getElementById("openModalBtn").addEventListener("click", openModal);


        </script>

</x-app-layout>
