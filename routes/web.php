<?php

Route::get('/', 'HomeController')->name('home');
Route::get('about', 'AboutController')->name('about');
Route::get('skills/{skill}', 'SkillController')->name('skill');
Route::get('experience/{company}', 'ExperienceController')->name('experience');
