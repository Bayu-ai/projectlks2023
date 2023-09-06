<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Bayu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est voluptatem enim delectus officia ipsam quod accusantium hic, recusandae id, unde aperiam architecto placeat laborum maxime a reprehenderit eum, ipsa voluptate ad labore cupiditate dolor. Nesciunt error corrupti officia explicabo dolore doloribus iste? Ab nam rerum exercitationem necessitatibus quis esse tenetur dolorem iste eius sapiente neque, facere iusto doloremque suscipit repellat laboriosam iure vitae sit doloribus officia veniam expedita molestias labore laudantium. Nostrum modi rem illum harum. Possimus quam ut aliquam reiciendis! Unde voluptatibus sed illum nemo excepturi id modi?"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Safyndra",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate facere assumenda natus. Reiciendis, quis hic repellendus iusto illo dolore nihil ad! Nobis facilis dignissimos ullam doloremque ipsum tempore molestiae voluptatibus minus culpa, quasi ea natus, odit nam accusantium voluptate facere, reprehenderit animi maiores. Animi tempora corporis distinctio vero numquam exercitationem laboriosam consequatur itaque porro, nesciunt facilis iste recusandae modi, delectus at quod iusto maxime dolorem repellat explicabo asperiores mollitia? At fugit maxime accusantium eaque neque, veniam saepe magni libero recusandae dolore quas nam ipsum repellendus nisi hic repudiandae nobis natus. Minus, distinctio iusto! Facere vitae voluptatibus blanditiis deserunt quibusdam, debitis eos explicabo error, necessitatibus non illum vero incidunt maiores nam reiciendis hic! Eum eos temporibus dolorum quisquam nihil eveniet laborum optio doloremque non? Ea possimus iure perferendis maiores suscipit dolores ut cumque enim illo. Iste ipsa, sed vitae a voluptatum optio cupiditate ratione at magnam nostrum, libero iure tempora similique aliquid et! Nostrum alias perspiciatis odit sunt repellendus, nemo soluta inventore qui? Illo eveniet reiciendis velit blanditiis ipsam dolores ullam voluptate laborum pariatur perspiciatis. Inventore perferendis voluptatem, voluptates exercitationem autem tempora consectetur quos asperiores magni! Placeat ab aut ad minima, quod iure quisquam veniam magni provident ut, quos, doloremque illo?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    
    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }

}
