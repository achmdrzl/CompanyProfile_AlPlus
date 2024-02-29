<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontOfficeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function projects()
    {
        return view('projects.projects');
    }

    public function projectDetail()
    {
        return view('projects.project-detail');
    }


    // PROJECT H KITCHEN
    public function projectHkitchen()
    {
        return view('projects.project-h-kitchen');
    }

    // PROJECT I HOUSE
    public function projectIhouse()
    {
        return view('projects.project-l-house');
    }

    // PROJECT I PET CLINIC
    public function projectIpetclinic()
    {
        return view('projects.project-l-petclinic');
    }

    // PROJECT R HOUSE
    public function projectRhouse()
    {
        return view('projects.project-r-house');
    }

    // PROJECT MS DIANA
    public function projectMsDiana()
    {
        return view('projects.project-ms-diana');
    }

    // PROJECT B PURY GALAXY
    public function projectBPuryGalaxy()
    {
        return view('projects.project-b-purygalaxy');
    }

    // PROJECT NG HOUSE
    public function projectNgHouse()
    {
        return view('projects.project-ng-house');
    }

    // PROJECT NS HOUSE
    public function projectNsHouse()
    {
        return view('projects.project-ns-house');
    }

    // PROJECT NF HOUSE
    public function projectNfHouse()
    {
        return view('projects.project-nf-house');
    }

    // PROJECT SK HOUSE
    public function projectSkHouse()
    {
        return view('projects.project-sk-house');
    }

    // PROJECT AP HOUSE
    public function projectApHouse()
    {
        return view('projects.project-ap-house');
    }


    public function blog()
    {
        return view('blog.blog');
    }

    public function blogDetail()
    {
        return view('blog.blog-detail');
    }

    public function blog_a()
    {
        return view('blog.blog-detail-a');
    }
    public function blog_b()
    {
        return view('blog.blog-detail-b');
    }
    public function blog_c()
    {
        return view('blog.blog-detail-c');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
