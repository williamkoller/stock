<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO products (name, amount, value, description) VALUES (?,?,?,?)',
            array('Geladeira', 2, 5900.00, 'Side by side com gelo na porta'));

        DB::insert('INSERT INTO products (name, amount, value, description) VALUES (?,?,?,?)',
            array('Fogão', 5, 950.00, 'Painel automático e forno elétrico'));

        DB::insert('INSERT INTO products (name, amount, value, description) VALUES (?,?,?,?)',
            array('Microondas', 1, 1520.00, 'Manda SMS quando termina de esquentar'));
    }
}
