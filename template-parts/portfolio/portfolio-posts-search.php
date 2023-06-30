	<div>
	    <!-- search script - searches current page posts and removes non-matching items -->
	    <script>
	        $(document).ready(function() {
	            $("#search-submit").click(function(e) {
	                e.preventDefault();

	                const value = $("#default-search").val().trim().toLowerCase();

	                // find all elements that don't have a matching ID
	                const elements = [...document.querySelectorAll(`.post-block`)];
	                const matchingIds = elements.filter((el) => {
	                    return !el.id.toLowerCase().includes(value);
	                });

	                // set matching elements to hidden
	                matchingIds.forEach((el) => {
	                    el.classList.add("hidden");
	                });

	                // make reset button visible
	                $("#search-reset").addClass("!opacity-100");
	            });

	            $("#search-reset").click(function(e) {
	                e.preventDefault();

	                const value = $("#default-search").val("");

	                // on reset click make hidden items visible
	                const elements = [...document.querySelectorAll(`.post-block`)];

	                // set matching elements to hidden
	                elements.forEach((el) => {
	                    el.classList.remove("hidden");
	                });

	                $(this).removeClass("!opacity-100");
	            })
	        });
	    </script>

	    <form id="posts-search" class="flex flex-row justify-center items-center w-full my-12">
	        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>

	        <div class="relative w-[20rem] md:w-[30rem]">

	            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
	                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
	                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
	                </svg>
	            </div>

	            <input type="search" id="default-search" name="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#e4c28b] focus:border-[#e4c28b]" placeholder="Search <?php single_post_title() ?> posts..." required>

	            <button id="search-reset" class="bg-[#e4c28b] text-black border-2 border-black font-bold text-base absolute right-24 bottom-3.5 rounded-full px-3 opacity-0 transition-all duration-150 ease-in-out">
	                Clear Search
	            </button>

	            <button id="search-submit" type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-black hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-[#e4c28b] font-medium rounded-lg text-sm px-4 py-2 transition-all duration-150 ease-in-out">
	                Search
	            </button>
	        </div>
	    </form>
	</div>