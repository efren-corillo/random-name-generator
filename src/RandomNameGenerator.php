<?php

namespace Doublybear\RandomNameGenerator;

class RandomNameGenerator {
	
	protected $adjectives;

	protected $nouns;
	
	protected $verbs;

	public function __construct() {
		$this->adjectives = [
	            'adorable', 'ambitious', 'breezy', 'bright', 'calm', 'cheerful', 'courageous', 'creative', 'delightful', 'determined', 'eager', 'enthusiastic', 'friendly', 'funny', 'gentle', 'happy', 'harmonious', 'humble', 'imaginative', 'jovial', 'kind', 'lively', 'loving', 'modest', 'optimistic',
	            'patient', 'peaceful', 'playful', 'polite', 'positive', 'proud', 'quiet', 'reliable', 'respectful', 'sincere', 'smart', 'strong', 'thoughtful', 'trustworthy', 'warm', 'wise', 'witty', 'zesty',
	        ];

		$this->nouns = [
		    'alligator', 'balloon', 'butterfly', 'cat', 'dolphin', 'elephant', 'flamingo', 'giraffe', 'hedgehog', 'iguana', 'jellyfish', 'kangaroo', 'lion', 'monkey', 'narwhal', 'octopus', 'penguin', 'quail', 'rabbit', 'seagull', 'tiger', 'umbrella', 'vulture', 'walrus', 'xerus', 'yak', 'zebra',
		    'acorn', 'bagel', 'cactus', 'donut', 'eagle', 'fountain', 'guitar', 'harbor', 'island', 'jacket', 'kettle', 'lighthouse', 'mountain', 'notebook', 'ostrich', 'piano', 'quartz', 'rainbow', 'sailboat', 'telescope', 'ukulele', 'violin', 'watermelon', 'xylophone', 'yacht', 'zeppelin',
		    'alder', 'birch', 'cedar', 'dogwood', 'elm', 'fir', 'ginkgo', 'hickory', 'ironwood', 'juniper', 'katsura', 'larch', 'maple', 'nectarine', 'oak', 'palm', 'quaking aspen', 'redbud', 'spruce', 'tulip tree', 'umbrella tree', 'viburnum', 'willow', 'yew', 'zelkova',
		    'apple', 'banana', 'carrot', 'date', 'elderberry', 'fig', 'grape', 'honeydew', 'iceberg lettuce', 'jalapeno', 'kiwi', 'lemon', 'mango', 'nectarine', 'orange', 'papaya', 'quince', 'raspberry', 'strawberry', 'tangerine', 'vanilla bean', 'watercress', 'yam', 'zucchini',
		    'agave', 'begonia', 'crocus', 'daffodil', 'echinacea', 'fern', 'geranium', 'hosta', 'iris', 'jasmine', 'kalanchoe', 'lavender', 'marigold', 'nasturtium', 'orchid', 'peony', 'quince', 'rose', 'sunflower', 'tulip', 'umbrella plant', 'violet', 'wisteria', 'xerophyte', 'yucca', 'zinnia',
		];

		$this->verbs = [
		    'Joyful', 'Happy', 'Grateful', 'Thankful', 'Blessed', 'Optimistic', 'Hopeful', 'Confident', 'Courageous', 'Empowered', 'Inspired', 'Creative', 'Innovative', 'Passionate', 'Enthusiastic', 'Energetic', 'Radiant', 'Glowing', 'Vibrant', 'Refreshed', 'Renewed', 'Rejuvenated', 'Relaxed',
		    'Peaceful', 'Serene', 'Tranquil', 'Calm', 'Centered', 'Grounded', 'Focused', 'Determined', 'Ambitious', 'Driven', 'Resilient', 'Strong', 'Courageous', 'Fearless', 'Bold', 'Adventurous', 'Curious', 'Playful', 'Lighthearted', 'Creative', 'Imaginative', 'Visionary', 'Wise', 'Compassionate',
		    'Understanding', 'Patient', 'Generous', 'Selfless', 'Kind', 'Thoughtful', 'Considerate', 'Helpful', 'Supportive', 'Encouraging', 'Motivational', 'Uplifting', 'Inspirational', 'Spiritual', 'Mindful', 'Reflective', 'Contemplative', 'Meditative', 'Gracious', 'Elegant', 'Refined',
		    'Sophisticated', 'Classy', 'Stylish', 'Charming', 'Enchanting', 'Beautiful', 'Exquisite', 'Alluring', 'Dazzling', 'Radiant', 'Majestic', 'Glorious', 'Magnificent', 'Splendid', 'Amazing', 'Incredible', 'Astonishing', 'Wonderful', 'Fabulous', 'Fantastic', 'Awesome', 'Outstanding',
		    'Excellent', 'Superb', 'Terrific', 'Marvelous', 'Remarkable', 'Phenomenal', 'Extraordinary', 'Miraculous', 'Divine', 'Magical'
		];	
	}

	private function getRandomElement($array) {
        return $array[array_rand($array)];
    }

    public function generateWords(): string
    {
        $adj = $this->getRandomElement($this->adjectives);
        $noun = $this->getRandomElement($this->nouns);
        $verb = $this->getRandomElement($this->verbs);

        return ucfirst($adj) . ' ' . ucfirst($noun) . ' ' . ucfirst($verb);
    }

    public function generateSlug($name): string
    {
        return strtolower(str_replace(' ', '-', $name));
    }
	
}