<!-- Form displayed as an overlay -->
<section class="flex flex-row justify-center">
    <div class="z-10 h-screen w-screen fixed top-0 bg-teal-700/70 hidden flex-row justify-center align-center" id="delete-div">
        <form action="form-submit.php" method="POST" class="my-auto" id="delete-form">
            <input id="delete-id" type="hidden" name="id" value="">
            <div class="bg-cyan-400 p-5 max-w-[100%] rounded-t">
                <article class="bg-amber-300 w-[16rem] h-[16rem] md:w-[14rem] md:h-[14rem] xl:w-[12rem] xl:h-[12rem] max-w-[90%] mt-5 mx-auto p-2 relative" data-id="">
                    <!-- Title -->
                    <h1 id="delete-title" class="font-bold" data-title=""></h1>
                    <!-- Text -->
                    <p id="delete-text" class="break-words" data-text=""></p>
                </article>
            </div>
            <!-- Message for the confirmation -->
            <div class="bg-cyan-400 p-5 max-w-[100%] rounded-t">
                <h1 class="text-center font-bold">Delete ?</h1>
            </div>
            <div class="bg-cyan-400 p-5 max-w-[100%] rounded-b flex flex-row justify-between align-center">
                <!-- Button for the submission -->    
                <button type="submit" name="submit" value="delete" class="btn-confirm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 h-10 fill-emerald-700">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                </button>
                <!-- Button for the cancellation -->
                <button type="reset" name="reset" class="btn-cancel">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 fill-rose-700">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
</section>