<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://unpkg.com/vue@next"></script>
</head>

<body>
  <div class="row-start-1">
    <div class="grid grid-cols-6">
      <div>
        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-3 ml-3">
          Add new Employee
        </button>
      </div>
      <div class="col-span-2 mt-3 border-4 border-black-600 rounded-lg py-2 px-2">
        <!-- <form class="" action="index.html" method="post">

          <label class="block">
            <span class="text-gray-700">First Name</span>
            <input class="form-input mt-1 block w-full" placeholder="Jane Doe">
          </label>

          <label class="block">
            <span class="text-gray-700">Middle Name</span>
            <input class="form-input mt-1 block w-full" placeholder="Jane Doe">
          </label>

          <label class="block">
            <span class="text-gray-700">Last Name</span>
            <input class="form-input mt-1 block w-full" placeholder="Jane Doe">
          </label>

          <label class="block">
            <span class="text-gray-700">Email</span>
            <input type="email" class="form-input mt-1 block w-full" placeholder="john@example.com">
          </label>

          <label class="block mt-4">
            <span class="text-gray-700">Department</span>
            <select class="form-select mt-1 block w-full">
              <option>administrative</option>
               need to fetch later 
            </select>
          </label>

          <label class="block mt-4">
            <span class="text-gray-700">City</span>
            <select class="form-select mt-1 block w-full">
              <option>administrative</option>
               need to fetch later 
            </select>
          </label>

          <label class="block mt-4">
            <span class="text-gray-700">State</span>
            <select class="form-select mt-1 block w-full">
              <option>administrative</option>
              need to fetch later 
            </select>
          </label>

          <label class="block mt-4">
            <span class="text-gray-700">Country</span>
            <select class="form-select mt-1 block w-full">
              <option>administrative</option>
               need to fetch later
            </select>
          </label>

          <label class="block">
            <span class="text-gray-700">ZIP code</span>
            <input type="email" class="form-input mt-1 block w-full" placeholder="john@example.com">
          </label>

        </form> -->

        <form action="/saveEmp" method="POST" class="w-full max-w-lg">
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="firstName">
                First Name
              </label>
              <input name="firstName" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="firstName" type="text" placeholder="Jane">
              <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Middle Name
              </label>
              <input name="middleName" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
              <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            </div>
            <div class="w-full md:w-1/2 px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Last Name
              </label>
              <input name="lastName" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
            </div>
            <div class="w-full md:w-1/2 px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Address
              </label>
              <textarea name="address" class="resize border rounded-md bg-gray-200 py-3 px-4"></textarea>
            </div>
          </div>

          <div class="flex flex-wrap -mx-3 mb-2">

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                Department
              </label>
              <div class="relative">
                <select name="department" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option value="New-Mexico">New Mexico</option>
                  <option value="Missouri" >Missouri</option>
                  <option value="Texas">Texas</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                  </svg>
                </div>
              </div>
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                City
              </label>
              <div class="relative">
                <select name="city" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option value="Colombo">Colombo</option>
                  <option value="Colombo">Colombo</option>
                  <option value="Kurunegala">Kurunegala</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                  </svg>
                </div>
              </div>
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                State
              </label>
              <div class="relative">
                <select name="state" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option value="North">North</option>
                  <option value="Western">Western</option>
                  <option value="Uwa">Uwa</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                  </svg>
                </div>
              </div>
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 mt-3 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                Country
              </label>
              <div class="relative">
                <select name="country" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option value="Sri-Lanka">Sri Lanka</option>
                  <option value="India">India</option>
                  <option value="Japan">Japan</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                  </svg>
                </div>
              </div>
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 mt-3 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                Zip
              </label>
              <input name="zip" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
            </div>
          </div>
          <div>
            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" type="submit">
              Save
            </button>
            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" type="reset">
              Clear
            </button>
          </div>

        </form>


      </div>
      <div id="empForm" class="col-span-3 mt-3">

      </div>
    </div>


    <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-3 ml-3">
      Search Employee
    </button>
  </div>


</body>

</html>