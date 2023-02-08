<!-- START: Content -->
<div class="ml-[410px] pr-[50px] overflow-hidden">
  <div class="py-[70px] flex flex-col gap-[50px]">
    <!-- Navbar -->
    <div class="flex justify-between items-center">
      <div class="flex flex-col gap-[10px]">
        <div class="font-bold text-[32px] text-white">
          Watch Today
        </div>
        <p class="mb-0 text-stream-gray text-base">
          Our selected movies for your mood
        </p>
      </div>
      <div class="flex items-center gap-[26px]">
        <span class="text-white text-base">Welcome, A Farhan Agustiansyah</span>
        <!-- user avatar -->
        <div class="collapsible-dropdown flex flex-col gap-2 relative">
          <a
            href="#!"
            class="outline outline-2 outline-stream-gray p-[6px] rounded-full w-[60px] dropdown-button"
            data-target="#dropdown-stream"
          >
            <img
              src="{{ asset('assets/images/user.png') }}"
              class="rounded-full object-cover w-full"
              alt="stream"
            />
          </a>
          <div
            class="bg-white rounded-2xl text-stream-dark font-medium flex flex-col gap-1 absolute z-[999] right-0 top-[80px] min-w-[180px] hidden overflow-hidden"
            id="dropdown-stream"
          >
            <a
              href="dashboard.html"
              class="transition-all hover:bg-sky-100 p-4"
            >
              Watch
            </a>
            <a href="#!" class="transition-all hover:bg-sky-100 p-4">
              Settings
            </a>
            <a href="sign_in.html" class="transition-all hover:bg-sky-100 p-4">
              Sign Out
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Navbar -->

    <!-- Featured -->
    <div>
      <div class="font-semibold text-[22px] text-white mb-[18px]">Featured</div>
      
      <div class="grid grid-cols-2 gap-5 xl:gap-12">
        <div class="col-span-1 relative overflow-hidden group">
          <img
            src="assets/images/featured-1.webp"
            class="object-cover rounded-[30px]"
            alt=""
          />
          <div
            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent"
          >
            <div class="px-7 pb-7">
              <div class="font-medium text-xl text-white">Avatar New Era</div>
              <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
            </div>
          </div>
          <div
            class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2 -translate-x-1/2 z-20 transition ease-in-out duration-500"
          >
            <img src="assets/images/ic_play.svg" class="" width="80" alt="" />
          </div>
          <a
            href="dashboard-movie_details.html"
            class="inset-0 absolute z-50"
          ></a>
        </div>
        <div class="col-span-1 relative overflow-hidden group">
          <img
            src="assets/images/featured-2.webp"
            class="object-cover rounded-[30px]"
            alt=""
          />
          <div
            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent"
          >
            <div class="px-7 pb-7">
              <div class="font-medium text-xl text-white">
                Death on the Nile
              </div>
              <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
            </div>
          </div>
          <div
            class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2 -translate-x-1/2 z-20 transition ease-in-out duration-500"
          >
            <img src="assets/images/ic_play.svg" class="" width="80" alt="" />
          </div>
          <a
            href="dashboard-movie_details.html"
            class="inset-0 absolute z-50"
          ></a>
        </div>
      </div>
      
    </div>
    <!-- /Featured -->

    <!-- Continue Watching -->
    <div>
      <div class="font-semibold text-[22px] text-white mb-[18px]">
        Continue Watching
      </div>

      <div class="watched-movies hidden">
        <!-- Movies 1 -->
        <div class="relative group overflow-hidden mr-[30px]">
          <img
            src="assets/images/film-5.webp"
            class="object-cover rounded-[30px] w-full h-[300px] w-[240px]"
            alt=""
          />
          <div
            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent overflow-hidden"
          >
            <div class="px-7 pb-7">
              <div class="font-medium text-xl text-white">Uncharted</div>
              <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
            </div>
          </div>
          <div
            class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2 -translate-x-1/2 z-20 transition ease-in-out duration-500"
          >
            <img src="assets/images/ic_play.svg" class="" width="80" alt="" />
          </div>
          <a href="watching.html" class="inset-0 absolute z-50"></a>
        </div>
        <!-- Movies 2 -->
        <div class="relative group overflow-hidden mr-[30px]">
          <img
            src="assets/images/film-4.webp"
            class="object-cover rounded-[30px] w-full h-[300px] w-[240px]"
            alt=""
          />
          <div
            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent overflow-hidden"
          >
            <div class="px-7 pb-7">
              <div class="font-medium text-xl text-white">Strange</div>
              <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
            </div>
          </div>
          <div
            class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2 -translate-x-1/2 z-20 transition ease-in-out duration-500"
          >
            <img src="assets/images/ic_play.svg" class="" width="80" alt="" />
          </div>
          <a href="watching.html" class="inset-0 absolute z-50"></a>
        </div>
        <!-- Movies 3 -->
        <div class="relative group overflow-hidden mr-[30px]">
          <img
            src="assets/images/film-3.webp"
            class="object-cover rounded-[30px] w-full h-[300px] w-[240px]"
            alt=""
          />
          <div
            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent overflow-hidden"
          >
            <div class="px-7 pb-7">
              <div class="font-medium text-xl text-white">Fornite</div>
              <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
            </div>
          </div>
          <div
            class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2 -translate-x-1/2 z-20 transition ease-in-out duration-500"
          >
            <img src="assets/images/ic_play.svg" class="" width="80" alt="" />
          </div>
          <a href="watching.html" class="inset-0 absolute z-50"></a>
        </div>
        <!-- Movies 4 -->
        <div class="relative group overflow-hidden mr-[30px]">
          <img
            src="assets/images/film-2.webp"
            class="object-cover rounded-[30px] w-full h-[300px] w-[240px]"
            alt=""
          />
          <div
            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent overflow-hidden"
          >
            <div class="px-7 pb-7">
              <div class="font-medium text-xl text-white">King's Queen</div>
              <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
            </div>
          </div>
          <div
            class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2 -translate-x-1/2 z-20 transition ease-in-out duration-500"
          >
            <img src="assets/images/ic_play.svg" class="" width="80" alt="" />
          </div>
          <a href="watching.html" class="inset-0 absolute z-50"></a>
        </div>
        <!-- Movies 5 -->
        <div class="relative group overflow-hidden mr-[30px]">
          <img
            src="assets/images/film-1.webp"
            class="object-cover rounded-[30px] w-full h-[300px] w-[240px]"
            alt=""
          />
          <div
            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent overflow-hidden"
          >
            <div class="px-7 pb-7">
              <div class="font-medium text-xl text-white">Morbius</div>
              <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
            </div>
          </div>
          <div
            class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2 -translate-x-1/2 z-20 transition ease-in-out duration-500"
          >
            <img src="assets/images/ic_play.svg" class="" width="80" alt="" />
          </div>
          <a href="watching.html" class="inset-0 absolute z-50"></a>
        </div>
      </div>

    </div>
    <!-- /Continue Watching -->
  </div>
</div>
<!-- END: Content -->
