<!DOCTYPE html>
<html>

<body>

<form role="form" method="post" action="imge" enctype="multipart/form-data">

        <div class="form-group">
            <label for="picture1">Catalogue</label>
            <input id="picture1" name="picture1" type="file" multiple class="form-control" />
            @if($errors->has('picture1'))
                {{ $errors->first('picture1') }}
            @endif
        </div>

        <input class="btn btn-success" type="submit" value="Add catalogue" />
    </form>
   
   </body>
 </html>