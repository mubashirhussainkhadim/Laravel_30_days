<!-- resources/views/home.blade.php -->
<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    <section class="bg-white shadow-md rounded p-6">
        <h2 class="text-2xl font-bold mb-4">Welcome to the Job Portal</h2>
        <p class="text-gray-700 mb-4">
            Our platform connects talented job seekers with top companies worldwide. Whether you're looking for your next big opportunity or aiming to hire the best talent, we've got you covered. 
            Join us today and start exploring countless possibilities to achieve your career or business goals.
        </p>
        <p class="text-gray-700">
            We focus on simplicity, reliability, and security to ensure a seamless experience. Browse jobs, create your profile, and apply with just a few clicks.
        </p>
    </section>

    <section class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Static Latest Jobs Section -->
        <div class="bg-blue-100 p-4 rounded">
            <h3 class="text-xl font-semibold">Latest Jobs</h3>
            <p class="text-gray-600 mt-1">
                Discover the most recent job postings tailored to your skills and experience.
            </p>
            <ul class="mt-3">
                <li class="text-gray-800 mt-2">
                    <a href="#" class="hover:underline font-medium">Software Engineer</a>
                    <span class="text-gray-600"> at Tech Solutions</span>
                    <p class="text-sm text-gray-500">Location: New York | Salary: $70,000</p>
                </li>
                <li class="text-gray-800 mt-2">
                    <a href="#" class="hover:underline font-medium">Marketing Manager</a>
                    <span class="text-gray-600"> at MarketCorp</span>
                    <p class="text-sm text-gray-500">Location: San Francisco | Salary: $90,000</p>
                </li>
                <li class="text-gray-800 mt-2">
                    <a href="#" class="hover:underline font-medium">UI/UX Designer</a>
                    <span class="text-gray-600"> at Designify</span>
                    <p class="text-sm text-gray-500">Location: Remote | Salary: $60,000</p>
                </li>
            </ul>
        </div>

        <!-- Static Top Companies Section -->
        <div class="bg-green-100 p-4 rounded">
            <h3 class="text-xl font-semibold">Top Companies</h3>
            <p class="text-gray-600 mt-1">
                Collaborate with industry-leading organizations actively seeking exceptional talent.
            </p>
            <ul class="mt-3">
                <li class="text-gray-800 mt-2">
                    <a href="#" class="hover:underline font-medium">Tech Solutions</a>
                    <p class="text-sm text-gray-500">Industry: Technology | Website: 
                        <a href="#" class="text-blue-500 hover:underline">www.techsolutions.com</a>
                    </p>
                </li>
                <li class="text-gray-800 mt-2">
                    <a href="#" class="hover:underline font-medium">MarketCorp</a>
                    <p class="text-sm text-gray-500">Industry: Marketing | Website: 
                        <a href="#" class="text-blue-500 hover:underline">www.marketcrop.com</a>
                    </p>
                </li>
                <li class="text-gray-800 mt-2">
                    <a href="#" class="hover:underline font-medium">Designify</a>
                    <p class="text-sm text-gray-500">Industry: Design | Website: 
                        <a href="#" class="text-blue-500 hover:underline">www.designify.com</a>
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <section class="mt-8 bg-gray-50 p-6 rounded">
        <h3 class="text-xl font-bold">Why Choose Us?</h3>
        <ul class="list-disc list-inside mt-3 text-gray-700">
            <li>Comprehensive job listings across various industries and locations.</li>
            <li>Advanced search filters for personalized results.</li>
            <li>Seamless application process with direct company connections.</li>
            <li>Secure and private handling of your data.</li>
            <li>Support for employers with candidate tracking and management tools.</li>
        </ul>
    </section>
</x-layout>
