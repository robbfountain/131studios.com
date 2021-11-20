---
title: {{$project->title}}
preview_image: 131Studios/{{$project->image}}
hidden: {{$project->is_published ? 'false' : 'true'}}
published: {{$project->created_at->format('m/j/y')}}
url: {{$project->url}}
slug: {{$project->slug}}
---

{{$project->content}}
