# Day 03

## Tasks Completed

- Completed all TODO Day 3 Blade view files inside `resources/views/projects` and `resources/views/tasks`.
- Built Projects List page using Blade and Tailwind CSS.
- Built Project Detail page with hardcoded dummy project data.
- Built New Project form page.
- Built Edit Project form page.
- Built Tasks List page with hardcoded task cards.
- Built Task Detail page with comments section.
- Built New Task form page.
- Built Edit Task form page.
- Updated controller methods to return Blade views instead of Day 2 placeholder text.
- Verified all required pages in browser.

## Problems and How I Solved It

- Pages were still showing Day 2 outputs like `show project 1`.
- Reason: Controller methods were still returning plain text responses.
- Solved by changing controller methods from text returns to Blade views.
- After updating controllers, all pages loaded correctly.

## Route Table

| URL                      | Method | Controller@Method        | Purpose                  |
| ------------------------ | ------ | ------------------------ | ------------------------ |
| /projects                | GET    | ProjectController@index  | Show projects list page  |
| /projects/create         | GET    | ProjectController@create | Show new project form    |
| /projects/1              | GET    | ProjectController@show   | Show project detail page |
| /projects/1/edit         | GET    | ProjectController@edit   | Show edit project form   |
| /projects/1/tasks        | GET    | TaskController@index     | Show tasks list page     |
| /projects/1/tasks/create | GET    | TaskController@create    | Show new task form       |
| /projects/1/tasks/1      | GET    | TaskController@show      | Show task detail page    |
| /projects/1/tasks/1/edit | GET    | TaskController@edit      | Show edit task form      |

## Final Result
- Completed all Day 3 UI pages successfully.
- Projects and Tasks pages now load proper Blade views.
- Forms, lists, and detail pages are working correctly.
- Layout design is consistent using Blade and Tailwind CSS.