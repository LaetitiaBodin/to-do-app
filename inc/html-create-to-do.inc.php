<section class="flex flex-row justify-center">
    <!-- Button used to make the form visible -->
    <div class="pt-5">
        <button class="btn-create" id="create-btn--show">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-cyan-800 w-14 h-14">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
    <!-- Form displayed as an overlay -->
    <div class="z-10 h-screen w-screen fixed bg-teal-700/70 hidden flex-row justify-center align-center" id="create-div">
        <form action="form-submit.php" method="POST" class="my-auto" id="create-form">
            <!-- Title -->
            <div class="bg-cyan-400 p-5 max-w-[100%] rounded-t">
                <label for="title">Title</label>
                <textarea id="create-title" name="title" cols="30" rows="1" minlength="1" maxlength="20" class="resize-none rounded block p-1" placeholder="20 characters max"></textarea>
            </div>
            <!-- Text -->
            <div class="bg-cyan-400 p-5 max-w-[100%]">
                <label for="text">Text</label>
                <textarea id="create-text" name="text" cols="30" rows="5" minlength="1" maxlength="100" class="resize-none rounded block p-1" placeholder="100 characters max"></textarea>
            </div>
            <!-- Message for the confirmation -->
            <div class="bg-cyan-400 p-5 max-w-[100%] rounded-t">
                <h1 class="text-center font-bold">Create ?</h1>
            </div>
            <!-- Buttons -->
            <div class="bg-cyan-400 p-5 max-w-[100%] rounded-b flex flex-row justify-between align-center">
                <!-- Button for the submission -->
                <button type="submit" name="submit" value="create" class="btn-confirm">
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