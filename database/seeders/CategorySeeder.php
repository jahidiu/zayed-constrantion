<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Markets',
            'slug'=>'markets',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Services',
            'slug'=>'services',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Offices',
            'slug'=>'offices',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'About',
            'slug'=>'about',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Stantec Investor Relations',
            'slug'=>'stantec-investor-relations',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Projects',
            'slug'=>'projects',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Cookie Disclaimer',
            'slug'=>'cookie-disclaimer',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Careers',
            'slug'=>'careers',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Copyright / Privacy Policy',
            'slug'=>'copyright-privacy-policy',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Search',
            'slug'=>'search',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Sitemap',
            'slug'=>'sitemap',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'People',
            'slug'=>'people',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Ideas',
            'slug'=>'ideas',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Portals',
            'slug'=>'portals',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Test Learning',
            'slug'=>'test-learning',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>Null,
            'name'=>'Location',
            'slug'=>'location',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        // end parent_category //

        // category under parent id 1
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Civic & Cultural',
            'slug'=>'civic-&-cultural',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Education',
            'slug'=>'education',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Environment',
            'slug'=>'environment',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Health',
            'slug'=>'health',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Industrial',
            'slug'=>'industrial',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Mining',
            'slug'=>'mining',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Oil & Gas',
            'slug'=>'Oil-&-Gas',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Power & Dams',
            'slug'=>'power-&-dams',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Residential',
            'slug'=>'residential',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Retail, Hospitality & Mixed-Use',
            'slug'=>'retail-hospitality-&-mixed-use',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Science & Technology',
            'slug'=>'science-&-technology',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Sports & Recreation',
            'slug'=>'sports-&-recreation',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Transportation',
            'slug'=>'transportation',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Urban Places',
            'slug'=>'urban-places',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Water',
            'slug'=>'water',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Workplace & Office',
            'slug'=>'workplace-&-office',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Smart Cities',
            'slug'=>'smart-cities',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Coastal & Marine',
            'slug'=>'coastal-&-marine',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Energy Transition',
            'slug'=>'energy-transition',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>1,
            'name'=>'Climate Solutions',
            'slug'=>'climate-solutions',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        
        // category under parent id 2
        DB::table('categories')->insert([
            'parant_id'=>2,
            'name'=>'Research + Benchmarking',
            'slug'=>'research-benchmarking',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>2,
            'name'=>'Hazardous Area Classification',
            'slug'=>'hazardous-area-classification',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>2,
            'name'=>'Airfield Electrical',
            'slug'=>'airfield-electrical',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>2,
            'name'=>'Alternative Project Delivery ',
            'slug'=>'alternative-project-delivery ',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>2,
            'name'=>'Power - Applications Engineering',
            'slug'=>'power-applications-engineering',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>2,
            'name'=>'Architecture',
            'slug'=>'architecture',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>2,
            'name'=>'Assessment & Permitting',
            'slug'=>'assessment-&-permitting',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>2,
            'name'=>'Atmospheric Sciences',
            'slug'=>'atmospheric-sciences',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>2,
            'name'=>'Baggage Systems Design',
            'slug'=>'baggage-systems-design',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>2,
            'name'=>'Bridge Inspection & Assessment',
            'slug'=>'bridge-inspection-&-assessment',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        
        // category under parent id 3
        DB::table('categories')->insert([
            'parant_id'=>3,
            'name'=>'Canada',
            'slug'=>'canada',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>3,
            'name'=>'United States',
            'slug'=>'United-States',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>3,
            'name'=>'Stantec in Canada',
            'slug'=>'stantec-in-canada',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>3,
            'name'=>'Stantec in the United States ',
            'slug'=>'stantec-in-the-United-States ',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>3,
            'name'=>'Stantec in Australia',
            'slug'=>'stantec-in-Australia',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>3,
            'name'=>'Stantec in Belgium',
            'slug'=>'stantec-in-belgium',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>3,
            'name'=>'Stantec in the Caribbean',
            'slug'=>'stantec-in-the-caribbean',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>3,
            'name'=>'Stantec in China',
            'slug'=>'stantec-in-china',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>3,
            'name'=>'Stantec in Italy',
            'slug'=>'stantec-in-italy',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>3,
            'name'=>'Stantec in Latin America',
            'slug'=>'stantec-in-Latin-America',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);

        // category under parent id 4
        DB::table('categories')->insert([
            'parant_id'=>4,
            'name'=>'Community Engagement',
            'slug'=>'community-engagement',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>4,
            'name'=>'Company Overview',
            'slug'=>'company-overview',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>4,
            'name'=>'Contact Us',
            'slug'=>'contact-us',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>4,
            'name'=>'Corporate Governance',
            'slug'=>'corporate-governance',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>4,
            'name'=>'Leadership',
            'slug'=>'leadership',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>4,
            'name'=>'Community',
            'slug'=>'community',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>4,
            'name'=>'Creativity',
            'slug'=>'creativity',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>4,
            'name'=>'Supplier Information',
            'slug'=>'supplier-information',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);

        // category under parent id 5
        DB::table('categories')->insert([
            'parant_id'=>5,
            'name'=>'Financial Information',
            'slug'=>'financial-information',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>5,
            'name'=>'Shareholder Information',
            'slug'=>'shareholder-information',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>5,
            'name'=>'Events & Presentations',
            'slug'=>'events-&-presentations',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>5,
            'name'=>'Investor News',
            'slug'=>'investor-news',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>5,
            'name'=>'Regulatory Filings',
            'slug'=>'regulatory-filings',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>5,
            'name'=>'Contact Information',
            'slug'=>'contact-information',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>6,
            'name'=>'Canada Projects',
            'slug'=>'canada-projects',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);

        // category under parent id 6
        DB::table('categories')->insert([
            'parant_id'=>6,
            'name'=>'United States Projects',
            'slug'=>'united-states-projects',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>6,
            'name'=>'Australia Projects',
            'slug'=>'australia-projects',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>6,
            'name'=>'New Zealand Projects',
            'slug'=>'new-zealand-projects',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>6,
            'name'=>'United Kingdom Projects',
            'slug'=>'united-kingdom-projects',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>6,
            'name'=>'Middle East Projects',
            'slug'=>'middle-east-projects',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);

        // category under parent id 8
        DB::table('categories')->insert([
            'parant_id'=>8,
            'name'=>'Employee Benefits',
            'slug'=>'employee-benefits',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>8,
            'name'=>'Learning & Development',
            'slug'=>'learning-&-development',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>8,
            'name'=>'Purpose & Values',
            'slug'=>'purpose-&-values',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>8,
            'name'=>'Students & Graduates',
            'slug'=>'students-&-graduates',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>8,
            'name'=>'Why Choose Stantec',
            'slug'=>'why-choose-stantec',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>8,
            'name'=>'Developing Professionals Group',
            'slug'=>'developing-professionals-group',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);

        // category under parent id 12
        DB::table('categories')->insert([
            'parant_id'=>12,
            'name'=>'Anca Andreescu',
            'slug'=>'Anca-Andreescu',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>12,
            'name'=>'Mesut Avci',
            'slug'=>'Mesut-Avci',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>12,
            'name'=>'Lindsay Alexander',
            'slug'=>'lindsay-alexander',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>12,
            'name'=>'Charles "Chuck" Allen',
            'slug'=>'Charles-Chuck-Allen',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>12,
            'name'=>'Matt Arsenault',
            'slug'=>'matt-arsenault',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);

        // category under parent id 13
        DB::table('categories')->insert([
            'parant_id'=>13,
            'name'=>'Careers',
            'slug'=>'careers-13',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>13,
            'name'=>'Watch',
            'slug'=>'watch',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
        DB::table('categories')->insert([
            'parant_id'=>13,
            'name'=>'Stantec Webinars',
            'slug'=>'stantec-webinars',
            'created_by'=>1,
            'updated_by'=>1,
            'status'=>1,
        ]);
    }
}
