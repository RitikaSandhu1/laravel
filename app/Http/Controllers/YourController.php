use App\Models\YourModel;
use Illuminate\Http\Request;

class YourController extends Controller
{
public function index()
{
// Retrieve all records
$data = YourModel::all();
return view('your-view', compact('data'));
}

public function create()
{
return view('create-view');
}

public function store(Request $request)
{
// Validate and store the new record
YourModel::create($request->all());
return redirect()->route('your.index');
}

public function edit(YourModel $yourModel)
{
return view('edit-view', compact('yourModel'));
}

public function update(Request $request, YourModel $yourModel)
{
// Validate and update the record
$yourModel->update($request->all());
return redirect()->route('your.index');
}

public function destroy(YourModel $yourModel)
{
// Delete the record
$yourModel->delete();
return redirect()->route('your.index');
}
}