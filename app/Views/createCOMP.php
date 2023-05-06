<?= $this->include('partial/header') ?>
<link rel="stylesheet" type="text/css" href="css/create.css">
<div class="formbold-main-wrapper" style="background-color: #C53F3E">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">
        <form action="https://formbold.com/s/FORM_ID" method="POST">
            <div class="formbold-input-wrapp formbold-mb-3">
                <label for="firstname" class="formbold-form-label"> Title </label>

                <div>
                    <input type="text" name="firstname" id="firstname" placeholder="First name" class="formbold-form-input " />
                </div>
            </div>

            <div class="formbold-mb-3">
                <label for="dob" class="formbold-form-label"> Date of Birth </label>
                <input type="date" name="dob" id="dob" class="formbold-form-input " />
            </div>

            <div class="formbold-mb-3">
                <label for="age" class="formbold-form-label"> Time </label>
                <input type="text" name="age" id="age" placeholder="HH:MM" class="formbold-form-input " />
            </div>

            <div class="formbold-mb-3">
                <label for="age" class="formbold-form-label"> Organizer </label>
                <input type="text" name="age" id="age" placeholder="   " class="formbold-form-input " />
            </div>

            <div class="formbold-mb-3">
                <label class="formbold-form-label">Type Sport</label>

                <select class="formbold-form-input " name="occupation" id="occupation">
                    <option value="male">Esport</option>
                    <option value="female">Sport</option>
                    <option value="others">Others</option>
                </select>
            </div>

            <div class="formbold-mb-3">
                <label class="formbold-form-label">Participan</label>

                <select class="formbold-form-input " name="occupation" id="occupation">
                    <option value="male">8</option>
                    <option value="female">16</option>
                </select>
            </div>

            <div class="formbold-mb-3">
                <label for="address" class="formbold-form-label"> Location </label>

                <input type="text" name="address" id="address" placeholder="Street address/Online" class="formbold-form-input formbold-mb-3" />
            </div>

            <div class="formbold-mb-3">
                <label for="upload" class="formbold-form-label">
                    Upload Poster
                </label>
                <input type="file" name="upload" id="upload" class="formbold-form-input formbold-form-file" />
            </div>

            <div class="formbold-mb-3">
                <label for="age" class="formbold-form-label"> Price </label>
                <input type="text" name="age" id="age" placeholder="   " class="formbold-form-input" />
            </div>

            <div class="formbold-checkbox-wrapper">
                <label for="supportCheckbox" class="formbold-checkbox-label">
                    <div class="formbold-relative">
                        <input type="checkbox" id="supportCheckbox" class="formbold-input-checkbox" />
                        <div class="formbold-checkbox-inner">
                            <span class="formbold-opacity-0">
                                <svg width="11" height="8" viewBox="0 0 11 8" class="formbold-stroke-current" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.81868 0.688604L4.16688 5.4878L2.05598 3.29507C1.70417 2.92271 1.1569 2.96409 0.805082 3.29507C0.453266 3.66742 0.492357 4.24663 0.805082 4.61898L3.30689 7.18407C3.54143 7.43231 3.85416 7.55642 4.16688 7.55642C4.47961 7.55642 4.79233 7.43231 5.02688 7.18407L10.0696 2.05389C10.4214 1.68154 10.4214 1.10233 10.0696 0.729976C9.71776 0.357624 9.17049 0.357625 8.81868 0.688604Z" fill="white" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    I agree to the defined
                    <a href="#"> terms, conditions, and policies</a>
                </label>
            </div>

            <button class="formbold-btn">Submit</button>
        </form>
    </div>
</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
</style>