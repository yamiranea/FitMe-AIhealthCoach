import React from "react";

const Footer = () => {
  return (
    <footer class="main-blue border-t border-white">
      <div class="mx-auto w-full max-w-full p-4 py-6 lg:py-8">
        <div class="flex flex-row justify-between">
          <div class="mb-6 md:mb-0">
            <div className="flex flex-col">
              <div className="krona-one-regular text-lg text-white mb-6">
                Follow Us
              </div>
              <div class="flex sm:justify-center sm:mt-0">
                <a
                  href="#"
                  class="text-white hover:text-red-400 dark:hover:text-white"
                >
                  <i class="fab fa-instagram"></i>
                  <span class="sr-only">Instagram page</span>
                </a>
                <a
                  href="#"
                  class="text-white hover:text-red-400 dark:hover:text-white ms-5"
                >
                  <i class="fab fa-facebook" aria-hidden="true"></i>
                  <span class="sr-only">Facebook page</span>
                </a>
              </div>
            </div>
          </div>
          <div class="flex flex-col gap-8 sm:gap-6">
            <div className="flex flex-col">
              <h2 class="mb-6 text-lg font-medium text-white hover:underline krub-semibold">
                About
              </h2>
              <ul class="text-white text-lg font-medium krub-semibold">
                <li class="mb-6">
                  <a href="#" class="hover:underline">
                    Privacy Policy
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:underline">
                    Contact
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="sm:flex sm:items-center sm:justify-between mt-8">
          <span class="text-sm text-white sm:text-center dark:text-gray-400 krub-regular">
            © 2024 FitMe AI Coach. All Rights Reserved.
          </span>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
