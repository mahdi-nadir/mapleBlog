    <div class="mainChatWindow text-md md:text-lg w-3/4 md:w-1/4 border-2 border-black bg-slate-100 rounded flex-row justify-end items-end mr-2 mb-2" style="display: none;">
        <div class="h-[36px] w-full bg-blue-700 border-b-2 border-slate-700 text-white flex flex-row justify-between items-center p-2 static">
            <span class="font-bold cursor-pointer pr-10 py-1">Talk to Medy</span>
            <div class="flex flex-row justify-center items-center gap-2" >
                <button class="reduceChatBtn hover:text-gray-400" title="Reduce"><i class="fa-solid fa-minus"></i></button>
                <button class="closeChatBtn hover:text-gray-400" title="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>
        <div class="chatDiv chatArea overflow-y-auto overflow-x-hidden">
            <div class="messageBot text-start flex flex-row justify-around items-end gap-2">
                <i class="fa-solid fa-robot ml-1 mb-1 robotIcon" style="display: none;"></i>
                <div>
                    <h3 class="hey rounded-lg my-1 p-2 text-sm md:text-md bg-teal-100 w-5/6 text-justify" style="display: none;">Hey There! I'm Medy, your personal assistant!</h3>
                    <h3 class="masculinePronoun rounded-lg my-1 p-2 text-sm md:text-md bg-teal-100 w-5/6 text-justify" style="display: none;"></h3>
                    {{-- <h3 class="whatLang rounded-lg my-1 p-2 text-sm md:text-md bg-teal-100 w-5/6 text-justify" style="display: none;">What language do you prefer?
                    <ul class="suggestionUser pt-2" style="display: none;">
                        <li><button class="answer engBtn bg-teal-300 w-3/4 text-start pl-2 ml-2 py-1 hover:bg-teal-400 rounded-lg">English</button></li>
                        <li><button class="answer frBtn bg-teal-300 w-3/4 text-start pl-2 ml-2 py-1 hover:bg-teal-400 rounded-lg mt-1">French</button></li>
                    </ul></h3> --}}
                </div>
            </div>
            <div class="discussion flex flex-col justify-center items-start gap-2 text-start">
                
            </div>
            <div class="spinner animate-spin" style="display: none;"><i class="fa-solid fa-spinner"></i></div>
        </div>
    </div>