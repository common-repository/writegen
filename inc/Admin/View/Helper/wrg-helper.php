<?php
/**
 * Options for different writing tones.
 * These options are used to provide users with choices for selecting a writing tone.
 * Each option has a corresponding key-value pair representing the tone and its label.
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$wrg_tone_options = [
    'formal' => esc_html__( 'Default', 'writegen' ),
    'informative' => esc_html__( 'Informative', 'writegen' ),
    'informal' => esc_html__( 'Informal', 'writegen' ),
    'humorous' => esc_html__( 'Humorous', 'writegen' ),
    'persuasive' => esc_html__( 'Persuasive', 'writegen' ),
    'descriptive' => esc_html__( 'Descriptive', 'writegen' ),
    'instructional' => esc_html__( 'Instructional', 'writegen' ),
    'empathetic' => esc_html__( 'Empathetic', 'writegen' ),
    'optimistic' => esc_html__( 'Optimistic', 'writegen' ),
    'educational' => esc_html__( 'Educational', 'writegen' ),
    'conversational' => esc_html__( 'Conversational', 'writegen' ),
];

/**
 * Options for different writing style.
 * These options are used to provide users with choices for selecting a writing style.
 * Each option has a corresponding key-value pair representing the tone and its label.
 */
$wrg_writing_style_options = [
    'formal' => esc_html__( 'Default', 'writegen' ),
    'informal' => esc_html__( 'Informal', 'writegen' ),
    'technical' => esc_html__( 'Technical', 'writegen' ),
    'creative' => esc_html__( 'Creative', 'writegen' ),
    'professional' => esc_html__( 'Professional', 'writegen' ),
    'persuasive' => esc_html__( 'Persuasive', 'writegen' ),
    'narrative' => esc_html__( 'Narrative', 'writegen' ),
    'humorous' => esc_html__( 'Humorous', 'writegen' ),
    'educational' => esc_html__( 'Educational', 'writegen' ),
    'scientific' => esc_html__( 'Scientific', 'writegen' ),
    'expository' => esc_html__( 'Expository', 'writegen' ),
    'descriptive' => esc_html__( 'Descriptive', 'writegen' ),
    'analytical' => esc_html__( 'Analytical', 'writegen' ),
    'comparative' => esc_html__( 'Comparative', 'writegen' ),
    'argumentative' => esc_html__( 'Argumentative', 'writegen' ),
    'instructional' => esc_html__( 'Instructional', 'writegen' ),
    'editorial' => esc_html__( 'Editorial', 'writegen' ),
    'review' => esc_html__( 'Review', 'writegen' ),
    'personal' => esc_html__( 'Personal', 'writegen' ),
    'reflective' => esc_html__( 'Reflective', 'writegen' ),
 ];
 
 /**
 * Options for different languages.
 * These options are used to provide users with choices for selecting a languages.
 * Each option has a corresponding key-value pair representing the tone and its label.
 */
 $wrg_language_options = [
    'English' => esc_html__( 'English', 'writegen' ),
    'German' => esc_html__( 'Deutsch', 'writegen' ),
    'Spanish' => esc_html__( 'Español', 'writegen' ),
    'French' => esc_html__( 'Français', 'writegen' ),
    'Italian' => esc_html__( 'Italiano', 'writegen' ),
    'Portuguese' => esc_html__( 'Português', 'writegen' ),
    'Polish' => esc_html__( 'Polski', 'writegen' ),
    'Ukrainian' => esc_html__( 'Українська', 'writegen' ),
    'Somali' => esc_html__( 'Af Soomaali', 'writegen' ),
    'Afrikaans' => esc_html__( 'Afrikaans', 'writegen' ),
    'Indonesian' => esc_html__( 'Bahasa Indonesia', 'writegen' ),
    'Malaysian Malay' => esc_html__( 'Bahasa Malaysia', 'writegen' ),
    'Malay' => esc_html__( 'Bahasa Melayu', 'writegen' ),
    'Czech' => esc_html__( 'Čeština', 'writegen' ),
    'Welsh' => esc_html__( 'Cymraeg', 'writegen' ),
    'Danish' => esc_html__( 'Dansk', 'writegen' ),
    'German' => esc_html__( 'Deutsch', 'writegen' ),
    'English (UK)' => esc_html__( 'English (UK)', 'writegen' ),
    'English (US)' => esc_html__( 'English (US)', 'writegen' ),
    'Spanish' => esc_html__( 'Español', 'writegen' ),
    'Esperanto' => esc_html__( 'Esperanto', 'writegen' ),
    'Basque' => esc_html__( 'Euskara', 'writegen' ),
    'French' => esc_html__( 'Français', 'writegen' ),
    'Irish' => esc_html__( 'Gaeilge', 'writegen' ),
    'Galician' => esc_html__( 'Galego', 'writegen' ),
    'Croatian' => esc_html__( 'Hrvatski jezik', 'writegen' ),
    'Swahili' => esc_html__( 'Kiswahili', 'writegen' ),
    'Italian' => esc_html__( 'Italiano', 'writegen' ),
    'Hungarian' => esc_html__( 'Magyar', 'writegen' ),
    'Maltese' => esc_html__( 'Malti', 'writegen' ),
    'Dutch' => esc_html__( 'Nederlands', 'writegen' ),
    'Norwegian' => esc_html__( 'Norsk', 'writegen' ),
    'Polish' => esc_html__( 'Polski', 'writegen' ),
    'Portuguese' => esc_html__( 'Português', 'writegen' ),
    'Romanian' => esc_html__( 'Română', 'writegen' ),
    'Albanian' => esc_html__( 'Shqip', 'writegen' ),
    'Slovak' => esc_html__( 'Slovenčina', 'writegen' ),
    'Slovenian' => esc_html__( 'Slovenščina', 'writegen' ),
    'Finnish' => esc_html__( 'Suomi', 'writegen' ),
    'Swedish' => esc_html__( 'Svenska', 'writegen' ),
    'Tagalog' => esc_html__( 'Tagalog', 'writegen' ),
    'Turkish' => esc_html__( 'Türkçe', 'writegen' ),
    'Vietnamese' => esc_html__( 'Việt ngữ', 'writegen' ),
    'Greek' => esc_html__( 'Ελληνικά', 'writegen' ),
    'Bulgarian' => esc_html__( 'Български език', 'writegen' ),
    'Russian' => esc_html__( 'Русский', 'writegen' ),
    'Serbian' => esc_html__( 'Српски језик', 'writegen' ),
    'Ukrainian' => esc_html__( 'Українська', 'writegen' ),
    'Georgian' => esc_html__( 'ქართული', 'writegen' ),
    'Armenian' => esc_html__( 'Հայերեն', 'writegen' ),
    'Yiddish' => esc_html__( 'ייִדיש', 'writegen' ),
    'Hebrew' => esc_html__( 'עברית', 'writegen' ),
    'Uyghur' => esc_html__( 'ئۇيغۇرچە', 'writegen' ),
    'Urdu' => esc_html__( 'اردو', 'writegen' ),
    'Arabic' => esc_html__( 'العربية', 'writegen' ),
    'Persian' => esc_html__( 'فارسی', 'writegen' ),
    'Nepali' => esc_html__( 'नेपाली', 'writegen' ),
    'Hindi' => esc_html__( 'हिन्दी', 'writegen' ),
    'Bengali' => esc_html__( 'বাংলা', 'writegen' ),
    'Punjabi' => esc_html__( 'ਪੰਜਾਬੀ', 'writegen' ),
    'Gujarati' => esc_html__( 'ગુજરાતી', 'writegen' ),
    'Tamil' => esc_html__( 'தமிழ்', 'writegen' ),
    'Telugu' => esc_html__( 'తెలుగు', 'writegen' ),
    'Kannada' => esc_html__( 'ಕನ್ನಡ', 'writegen' ),
    'Malayalam' => esc_html__( 'മലയാളം', 'writegen' ),
    'Sinhala' => esc_html__( 'සිංහල', 'writegen' ),
    'Thai' => esc_html__( 'ไทย', 'writegen' ),
    'Burmese' => esc_html__( 'ဗမာစာ', 'writegen' ),
    'Khmer' => esc_html__( 'ភាសាខ្មែរ', 'writegen' ),
    'Korean' => esc_html__( '한국어', 'writegen' ),
    'Chinese' => esc_html__( '中文', 'writegen' ),
    'Japanese' => esc_html__( '日本語', 'writegen' )
];
