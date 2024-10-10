<?php

namespace Database\Seeders;

use App\Models\Contact;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'isi_contact' => '
            <p><span style="font-size: 14pt;"><strong>For Bussiness:</strong></span></p>
            <p><span style="font-size: 12pt;">bussiness@idkcompany.com</span></p>
            <p><br><span style="font-size: 14pt;"><strong>For Customer Support:</strong></span></p>
            <p><span style="font-size: 12pt;">support@idkcompany.com</span></p>
            <p>&nbsp;</p>
            <table style="border-collapse: collapse; width: 40.9211%; border-width: 0px; height: 97px; border-style: hidden; margin-left: 0px; margin-right: auto;" border="1"><colgroup><col style="width: 100%;"></colgroup>
            <tbody>
            <tr style="height: 22.4px;">
            <td style="height: 22.4px; text-align: left; border-width: 0px;"><span style="font-size: 14pt;"><strong>Hotline:</strong></span></td>
            </tr>
            <tr>
            <td style="border-width: 0px;">+62-817283719872389</td>
            </tr>
            <tr>
            <td style="border-width: 0px;">+62-184718927989128</td>
            </tr>
            </tbody>
            </table>
            '
        ]);
    }
}
