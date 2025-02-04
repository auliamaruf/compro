<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'The Future of AI',
                'body' => 'Artificial Intelligence is transforming the world in ways we never imagined before. From self-driving cars to smart home devices, AI is becoming increasingly integrated into our daily lives. Machine learning algorithms are getting more sophisticated, enabling computers to perform tasks that once required human intelligence. The possibilities seem endless as we continue to push the boundaries of what AI can do.',
                'image' => 'ai_future.jpg',
                'category_id' => 1,
                'author_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '5 Tips for Healthy Living',
                'body' => 'Living a healthy lifestyle is important for both physical and mental well-being. Regular exercise, balanced nutrition, and adequate sleep form the foundation of good health. Understanding how to maintain a healthy work-life balance, managing stress effectively, and staying motivated to achieve your fitness goals are key factors in leading a fulfilling life.',
                'image' => 'healthy_living.jpg',
                'category_id' => 2,
                'author_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'How to Start a Business in 2025',
                'body' => 'Starting a business requires planning and dedication, especially in the rapidly evolving landscape of 2025. Understanding market trends, developing a solid business plan, and securing adequate funding are crucial first steps. Digital transformation, sustainability practices, and innovative customer engagement strategies have become essential components for any successful business venture in this new era.',
                'image' => 'start_business.jpg',
                'category_id' => 1,
                'author_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Minimalist Lifestyle: The New Trend',
                'body' => 'Many people are embracing minimalism as a way to simplify their lives and focus on what truly matters. This lifestyle choice goes beyond just decluttering physical spaces; it represents a fundamental shift in mindset. The principles of minimalism can be applied to various aspects of life, from personal finances to digital consumption, leading to reduced stress and increased happiness.',
                'image' => 'minimalist.jpg',
                'category_id' => 3,
                'author_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Why Online Learning is the Future',
                'body' => 'Education is shifting towards digital platforms at an unprecedented rate, revolutionizing how we learn and acquire new skills. The flexibility and accessibility of online learning have made education more democratic and inclusive than ever before. Advanced technologies, interactive learning tools, and personalized learning paths are creating more engaging and effective educational experiences for students of all ages.',
                'image' => 'online_learning.jpg',
                'category_id' => 1,
                'author_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
