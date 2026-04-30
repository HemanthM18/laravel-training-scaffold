# Day 02 – Routes & Controllers

## Tasks Completed

Defined resource routes for projects and nested tasks in `routes/web.php`.  
Connected routes with `ProjectController` and `TaskController`.  
Updated placeholder methods to return simple text responses.  
Verified all required URLs in browser.  
Pushed changes to GitHub.

## Route Table 
// For verification purpose

| URL | Method | Controller@Method | Purpose |
|-----|--------|-------------------|---------|
| /projects | GET | ProjectController@index | Show all projects |
| /projects/create | GET | ProjectController@create | Create project form |
| /projects/{project} | GET | ProjectController@show | Show single project |
| /projects/{project}/tasks | GET | TaskController@index | Show tasks of project |

## Problems & Fixes

Got 404 error because Laravel route model binding expected database records.  
→ Fixed by using placeholder route parameters for Day 2 testing.

## Final Result

All required routes are accessible.  
Controllers return placeholder outputs successfully.